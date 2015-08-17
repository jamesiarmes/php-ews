<?php
/**
 * Created by PhpStorm.
 * User: gareth
 * Date: 7-8-15
 * Time: 15:51
 */

namespace jamesiarmes\PEWS\Generator;

use Zend\Code\Generator;
use Goetas\Xsd\XsdToPhp\Php\Structure\PHPClass;
use Zend\Code\Generator\DocBlockGenerator;
use ReflectionMethod;
use Zend\Code\Generator\PropertyGenerator;
use Goetas\Xsd\XsdToPhp\Php\Structure\PHPProperty;
use Zend\Code\Generator\DocBlock\Tag\PropertyTag;
use Doctrine\Common\Inflector\Inflector;
use Zend\Code\Reflection\DocBlock\Tag\MethodTag;

class ClassGenerator extends \Goetas\Xsd\XsdToPhp\Php\ClassGenerator
{
    public function generate(Generator\ClassGenerator $class, PHPClass $type)
    {
        if (!($extends = $type->getExtends()) && class_exists($type->getNamespace())) {
            $extendNamespace = $type->getNamespace();
            $extendNamespace = explode('\\', $extendNamespace);
            $extendClass = array_pop($extendNamespace);
            $extendNamespace = implode('\\', $extendNamespace);

            $extends = new PHPClass();
            $extends->setName($extendClass);
            $extends->setNamespace($extendNamespace);

            $class->setExtendedClass($extends);
        }

        $docblock = new DocBlockGenerator("Class representing " . $type->getName());
        if ($type->getDoc()) {
            $docblock->setLongDescription($type->getDoc());
        }
        $class->setNamespaceName($type->getNamespace());
        $class->setName($type->getName());
        $class->setDocblock($docblock);


        $class->setExtendedClass($extends->getName());

        if ($extends->getNamespace() != $type->getNamespace()) {
            if ($extends->getName() == $type->getName()) {
                $class->addUse($type->getExtends()
                    ->getFullName(), $extends->getName() . "Base");
                $class->setExtendedClass($extends->getName() . "Base");
            } else {
                $class->addUse($extends->getFullName());
            }
        }

        if ($this->handleBody($class, $type)) {
            return true;
        }
    }

    protected function handleBody(Generator\ClassGenerator $class, PHPClass $type)
    {
        foreach ($type->getProperties() as $prop) {
            if ($prop->getName() !== '__value') {
                $this->handleProperty($class, $prop);
            }
        }
        foreach ($type->getProperties() as $prop) {
            if ($prop->getName() !== '__value') {
                $this->handleMethod($class, $prop, $type);
            }
        }

        if (count($type->getProperties()) === 1 && $type->hasProperty('__value')) {
            return false;
        }

        return true;
    }

    protected function handleProperty(Generator\ClassGenerator $class, PHPProperty $prop)
    {
        $generatedProp = new PropertyGenerator($prop->getName());
        $generatedProp->setVisibility(PropertyGenerator::VISIBILITY_PROTECTED);

        $class->addPropertyFromGenerator($generatedProp);

        if ($prop->getType() && (! $prop->getType()->getNamespace() && $prop->getType()->getName() == "array")) {
            // $generatedProp->setDefaultValue(array(), PropertyValueGenerator::TYPE_AUTO, PropertyValueGenerator::OUTPUT_SINGLE_LINE);
        }

        $docBlock = new DocBlockGenerator();
        $generatedProp->setDocBlock($docBlock);

        if ($prop->getDoc()) {
            $docBlock->setLongDescription($prop->getDoc());
        }
        $tag = new PropertyTag($prop->getName(), 'mixed');

        $type = $prop->getType();

        if ($type && $type instanceof PHPClassOf) {
            $tt = $type->getArg()->getType();
            $tag->setTypes($this->getPhpType($tt) . "[]");
            if ($p = $this->isOneType($tt)) {
                if (($t = $p->getType())) {
                    $tag->setTypes($this->getPhpType($t) . "[]");
                }
            }
        } elseif ($type) {

            if ($this->isNativeType($type)) {
                $tag->setTypes($this->getPhpType($type));
            } elseif (($p = $this->isOneType($type)) && ($t = $p->getType())) {
                $tag->setTypes($this->getPhpType($t));
            } else {
                $tag->setTypes($this->getPhpType($prop->getType()));
            }
        }
        $docBlock->setTag($tag);

        if ($type->type && $this->isTypeMapped($type->type->getName())) {
            if (!$class->hasProperty('_typeMap')) {
                $generatedProp = new PropertyGenerator('_typeMap');
                $generatedProp->setDefaultValue([]);
                $generatedProp->setVisibility(PropertyGenerator::VISIBILITY_PROTECTED);

                $class->addPropertyFromGenerator($generatedProp);
            }

            $property = $class->getProperty('_typeMap');
            $defaultValue = $property->getDefaultValue()->getValue();
            $defaultValue[$prop->getName()] = $type->type->getName();
            $property->setDefaultValue($defaultValue);
        }
    }

    protected function handleMethod(Generator\ClassGenerator $generator, PHPProperty $prop, PHPClass $class)
    {
        if ($prop->getType() instanceof PHPClassOf) {
            $this->handleAdder($generator, $prop, $class);
        }

        $this->handleGetter($generator, $prop, $class);
        $this->handleSetter($generator, $prop, $class);
    }

    protected function handleAdder(Generator\ClassGenerator $generator, PHPProperty $prop, PHPClass $class)
    {

    }

    protected function handleGetter(Generator\ClassGenerator $generator, PHPProperty $prop, PHPClass $class)
    {
        $name = "get" . Inflector::classify($prop->getName());
        $fullName = "method {$class->getName()} $name()";

        $docblock = $generator->getDocBlock();

        $tag = new Generator\DocBlock\Tag();
        $tag->setName($fullName);

        $docblock->setTag($tag);
        return;
    }

    protected function handleSetter(Generator\ClassGenerator $generator, PHPProperty $prop, PHPClass $class)
    {
        $name = "set" . Inflector::classify($prop->getName());
        $fullName = "method {$class->getName()} $name(\${$prop->getName()})";

        $docblock = $generator->getDocBlock();

        $tag = new Generator\DocBlock\Tag();
        $tag->setName($fullName);

        $docblock->setTag($tag);
        return;
    }

    protected function isOneType(PHPClass $type, $onlyParent = false)
    {
        if ($onlyParent) {
            $e = $type->getExtends();
            if ($e) {
                if ($e->hasProperty('__value')) {
                    return $e->getProperty('__value');
                }
            }
        } else {
            if ($type->hasPropertyInHierarchy('__value') && count($type->getPropertiesInHierarchy()) === 1) {
                return $type->getPropertyInHierarchy("__value");
            }
        }
    }

    protected function getPhpType(PHPClass $class)
    {
        if (! $class->getNamespace()) {
            if ($this->isNativeType($class)) {
                return $class->getName();
            }
            return "\\" . $class->getName();
        }
        return "\\" . $class->getFullName();
    }

    protected function isNativeType(PHPClass $class)
    {
        return ! $class->getNamespace() && in_array($class->getName(), [
            'string',
            'int',
            'float',
            'integer',
            'boolean',
            'array',
            'mixed',
            'callable'
        ]);
    }

    protected function isTypeMapped($class)
    {
        $classMap = [
            'dateTime',
            'time',
            'date'
        ];

        return in_array($class, $classMap);
    }
}
