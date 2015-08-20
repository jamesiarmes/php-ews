<?php
/**
 * Created by PhpStorm.
 * User: gareth
 * Date: 7-8-15
 * Time: 15:51
 */

namespace jamesiarmes\PEWS\Generator;

use Goetas\Xsd\XsdToPhp\Php\Structure\PHPClassOf;
use phpDocumentor\Reflection\DocBlock\Tag\VarTag;
use Zend\Code\Generator;
use Goetas\Xsd\XsdToPhp\Php\Structure\PHPClass;
use Zend\Code\Generator\DocBlockGenerator;
use Zend\Code\Generator\PropertyGenerator;
use Goetas\Xsd\XsdToPhp\Php\Structure\PHPProperty;
use Zend\Code\Generator\DocBlock\Tag\PropertyTag;
use Doctrine\Common\Inflector\Inflector;

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

        if ($extends->getName() == "string"
            && $extends->getNamespace() == ""
            && class_exists($type->getNamespace() . '\\String')) {
            $extends->setName('String');
            $extends->setNamespace($type->getNamespace());
        } elseif ($extends->getName() == "string"
            && $extends->getNamespace() == ""
            && class_exists(($type->getNamespace()))) {
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
        $this->handleEnumeration($class, $type);

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

        if (!$class->hasProperty($prop->getName())) {
            $class->addPropertyFromGenerator($generatedProp);
        } else {
            $generatedProp = $class->getProperty($prop->getName());
        }

        $docBlock = new DocBlockGenerator();
        $generatedProp->setDocBlock($docBlock);

        if ($prop->getDoc()) {
            $docBlock->setLongDescription($prop->getDoc());
        }
        $tag = new Generator\DocBlock\Tag();
        $tag->setName("@var {$this->getPropertyType($prop)}");
        $docBlock->setTag($tag);

        $type = $prop->getType();
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
        $name = "add" . Inflector::classify($prop->getName());

        $type = $this->getPropertyType($prop);
        $namespace = explode("\\", $type);
        $namespaceClass = array_pop($namespace);
        $namespace = implode("\\", $namespace);
        if ($namespace == $class->getNamespace() || $namespace == "\\" . $class->getNamespace()) {
            $type = $namespaceClass;
        }
        if (substr($type, -2) == "[]") {
            $type = substr($type, 0, strlen($type) - 2);
        }

        $fullName = "method {$class->getName()} $name($type \${$prop->getName()})";

        $docblock = $generator->getDocBlock();
        $docblock->setWordWrap(false);

        $tag = new Generator\DocBlock\Tag();
        $tag->setName($fullName);

        $docblock->setTag($tag);

        return;
    }

    protected function handleGetter(Generator\ClassGenerator $generator, PHPProperty $prop, PHPClass $class)
    {
        $type = $this->getPropertyType($prop);
        $namespace = explode("\\", $type);
        $namespaceClass = array_pop($namespace);
        $namespace = implode("\\", $namespace);
        if ($namespace == $class->getNamespace() || $namespace == "\\" . $class->getNamespace()) {
            $type = $namespaceClass;
        }

        $name = "get" . Inflector::classify($prop->getName());
        $fullName = "method $type $name()";

        $docblock = $generator->getDocBlock();

        $tag = new Generator\DocBlock\Tag();
        $tag->setName($fullName);

        $docblock->setTag($tag);

        return;
    }

    protected function handleSetter(Generator\ClassGenerator $generator, PHPProperty $prop, PHPClass $class)
    {
        $name = "set" . Inflector::classify($prop->getName());

        $type = $this->getPropertyType($prop);
        $namespace = explode("\\", $type);
        $namespaceClass = array_pop($namespace);
        $namespace = implode("\\", $namespace);
        if ($namespace == $class->getNamespace() || $namespace == "\\" . $class->getNamespace()) {
            $type = $namespaceClass;
        }
        if (substr($type, -2) == "[]") {
            $type = "array";
        }

        $fullName = "method {$class->getName()} $name($type \${$prop->getName()})";

        $docblock = $generator->getDocBlock();
        $docblock->setWordWrap(false);

        $tag = new Generator\DocBlock\Tag();
        $tag->setName($fullName);

        $docblock->setTag($tag);

        return;
    }

    protected function handleEnumeration(Generator\ClassGenerator $class, PHPClass $type)
    {
        if ($type->getChecks('__value') && isset($type->getChecks('__value')['enumeration'])) {
            $enums = $type->getChecks('__value')['enumeration'];

            foreach ($enums as $enum) {
                $name = strtoupper($enum['value']);
                $value = strtoupper($enum['value']);

                if (!$class->hasConstant($name)) {
                    $class->addConstant($name, $value);
                }
            }
        }
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
        if (!$class->getNamespace()) {
            if ($this->isNativeType($class)) {
                return $class->getName();
            }

            return "\\" . $class->getName();
        }

        return "\\" . $class->getFullName();
    }

    protected function isNativeType(PHPClass $class)
    {
        return !$class->getNamespace() && in_array($class->getName(), [
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

    protected function getPropertyType($property)
    {
        $type = $property->getType();
        $returnType = "";

        if ($type && $type instanceof PHPClassOf) {
            $tt = $type->getArg()->getType();
            $returnType = $this->getPhpType($tt) . "[]";
            if ($p = $this->isOneType($tt)) {
                if (($t = $p->getType())) {
                    $returnType = $this->getPhpType($t) . "[]";
                }
            }
        } elseif ($type) {
            if ($this->isNativeType($type)) {
                $returnType = $this->getPhpType($type);
            } elseif (($p = $this->isOneType($type)) && ($t = $p->getType())) {
                $returnType = $this->getPhpType($t);
            } else {
                $returnType = $this->getPhpType($property->getType());
            }
        }

        return $returnType;
    }
}
