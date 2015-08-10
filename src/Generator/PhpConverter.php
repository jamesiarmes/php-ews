<?php
/**
 * Created by PhpStorm.
 * User: gareth
 * Date: 7-8-15
 * Time: 15:20
 */

namespace jamesiarmes\PEWS\Generator;

use Exception;
use Doctrine\Common\Inflector\Inflector;
use Goetas\Xsd\XsdToPhp\Php\Structure\PHPClassOf;
use Goetas\Xsd\XsdToPhp\Php\Structure\PHPArg;
use Goetas\Xsd\XsdToPhp\Php\Structure\PHPClass;
use Goetas\Xsd\XsdToPhp\Php\Structure\PHPProperty;
use Goetas\XML\XSDReader\Schema\Schema;
use Goetas\XML\XSDReader\Schema\Type\Type;
use Goetas\XML\XSDReader\Schema\Type\BaseComplexType;
use Goetas\XML\XSDReader\Schema\Type\ComplexType;
use Goetas\XML\XSDReader\Schema\Element\Element;
use Goetas\XML\XSDReader\Schema\Item;
use Goetas\XML\XSDReader\Schema\Attribute\Group as AttributeGroup;
use Goetas\XML\XSDReader\Schema\Element\Group;
use Goetas\XML\XSDReader\Schema\Type\SimpleType;
use Goetas\XML\XSDReader\Schema\Attribute\AttributeItem;
use Goetas\XML\XSDReader\Schema\Element\ElementRef;
use Goetas\XML\XSDReader\Schema\Element\ElementDef;
use Goetas\XML\XSDReader\Schema\Element\ElementSingle;
use Goetas\Xsd\XsdToPhp\AbstractConverter;
use Goetas\Xsd\XsdToPhp\Naming\NamingStrategy;

class PhpConverter extends \Goetas\Xsd\XsdToPhp\Php\PhpConverter
{

    public function __construct(NamingStrategy $namingStrategy){
        parent::__construct($namingStrategy);

        $this->addAliasMap("http://www.w3.org/2001/XMLSchema", "dateTime", function (Type $type)
        {
            return "DateTime";
        });
        $this->addAliasMap("http://www.w3.org/2001/XMLSchema", "time", function (Type $type)
        {
            return "DateTime";
        });
        $this->addAliasMap("http://www.w3.org/2001/XMLSchema", "date", function (Type $type)
        {
            return "DateTime";
        });
        $this->addAliasMap("http://www.w3.org/2001/XMLSchema", "anySimpleType", function (Type $type)
        {
            return "mixed";
        });
        $this->addAliasMap("http://www.w3.org/2001/XMLSchema", "anyType", function (Type $type)
        {
            return "mixed";
        });
    }

    private $classes = [];

    public function convert(array $schemas)
    {
        $visited = array();
        $this->classes = array();
        foreach ($schemas as $schema) {
            $this->navigate($schema, $visited);
        }
        return $this->getTypes();
    }

    /**
     *
     * @return PHPClass[]
     */
    private function getTypes()
    {
        uasort($this->classes, function ($a, $b)
        {
            return strcmp($a["class"]->getFullName(), $b["class"]->getFullName());
        });
        $ret = array();
        foreach ($this->classes as $classData) {
            if (! isset($classData["skip"]) || ! $classData["skip"]) {
                $ret[$classData["class"]->getFullName()] = $classData["class"];
            }
        }

        return $ret;
    }

    private function navigate(Schema $schema, array &$visited)
    {
        if (isset($visited[spl_object_hash($schema)])) {
            return;
        }
        $visited[spl_object_hash($schema)] = true;

        foreach ($schema->getTypes() as $type) {
            $this->visitType($type);
        }
        foreach ($schema->getElements() as $element) {
            $this->visitElementDef($element);
        }

        foreach ($schema->getSchemas() as $schildSchema) {
            if (! in_array($schildSchema->getTargetNamespace(), $this->baseSchemas, true)) {
                $this->navigate($schildSchema, $visited);
            }
        }
    }

    private function visitTypeBase(PHPClass $class, Type $type)
    {
        $class->setAbstract($type->isAbstract());

        if ($type instanceof SimpleType) {
            $this->visitSimpleType($class, $type);
        }
        if ($type instanceof BaseComplexType) {
            $this->visitBaseComplexType($class, $type);
        }
        if ($type instanceof ComplexType) {
            $this->visitComplexType($class, $type);
        }
    }

    private function visitGroup(PHPClass $class, Schema $schema, Group $group)
    {
        foreach ($group->getElements() as $childGroup) {
            if ($childGroup instanceof Group) {
                $this->visitGroup($class, $schema, $childGroup);
            } else {
                $property = $this->visitElement($class, $schema, $childGroup);
                $class->addProperty($property);
            }
        }
    }

    private function visitAttributeGroup(PHPClass $class, Schema $schema, AttributeGroup $att)
    {
        foreach ($att->getAttributes() as $childAttr) {
            if ($childAttr instanceof AttributeGroup) {
                $this->visitAttributeGroup($class, $schema, $childAttr);
            } else {
                $property = $this->visitAttribute($class, $schema, $childAttr);
                $class->addProperty($property);
            }
        }
    }

    private function visitElementDef(ElementDef $element)
    {
        if (! isset($this->classes[spl_object_hash($element)])) {
            $schema = $element->getSchema();

            $class = new PHPClass();
            $class->setDoc($element->getDoc());
            $class->setName($this->getNamingStrategy()->getItemName($element));
            $class->setDoc($element->getDoc());
            $class->type = $element->getType();

            if (! isset($this->namespaces[$schema->getTargetNamespace()])) {
                throw new Exception(sprintf("Can't find a PHP namespace to '%s' namespace", $schema->getTargetNamespace()));
            }
            $class->setNamespace($this->namespaces[$schema->getTargetNamespace()]);

            $this->classes[spl_object_hash($element)]["class"] = $class;

            if (! $element->getType()->getName()) {
                $this->visitTypeBase($class, $element->getType());
            } else {
                $this->handleClassExtension($class, $element->getType());
            }
        }
        return $this->classes[spl_object_hash($element)]["class"];
    }

    private function findPHPName(Type $type)
    {
        $schema = $type->getSchema();

        if ($className = $this->getTypeAlias($type)) {

            if (($pos = strrpos($className, '\\')) !== false) {
                return [
                    substr($className, $pos + 1),
                    substr($className, 0, $pos)
                ];
            } else {
                return [
                    $className,
                    null
                ];
            }
        }

        $name = $this->getNamingStrategy()->getTypeName($type);

        if (! isset($this->namespaces[$schema->getTargetNamespace()])) {
            throw new Exception(sprintf("Can't find a PHP namespace to '%s' namespace", $schema->getTargetNamespace()));
        }
        $ns = $this->namespaces[$schema->getTargetNamespace()];
        return [
            $name,
            $ns
        ];
    }

    /**
     *
     * @param Type $type
     * @param boolean $force
     * @return \Goetas\Xsd\XsdToPhp\Php\Structure\PHPClass
     */
    private function visitType(Type $type, $force = false)
    {
        if (! isset($this->classes[spl_object_hash($type)])) {

            $this->classes[spl_object_hash($type)]["class"] = $class = new PHPClass();
            $class->type = $type;

            if ($alias = $this->getTypeAlias($type)) {
                $class->setName($alias);
                $this->classes[spl_object_hash($type)]["skip"] = true;
                return $class;
            }

            list ($name, $ns) = $this->findPHPName($type);
            $class->setName($name);
            $class->setNamespace($ns);

            $class->setDoc($type->getDoc() . PHP_EOL . "XSD Type: " . ($type->getName() ?  : 'anonymous'));

            $this->visitTypeBase($class, $type);

            if ($type instanceof SimpleType){
                $this->classes[spl_object_hash($type)]["skip"] = true;
                return $class;
            }
            if (($this->isArrayType($type) || $this->isArrayNestedElement($type)) && !$force) {
                $this->classes[spl_object_hash($type)]["skip"] = true;
                return $class;
            }

            $this->classes[spl_object_hash($type)]["skip"] = !!$this->getTypeAlias($type);
        }elseif ($force) {
            if (!($type instanceof SimpleType) && !$this->getTypeAlias($type)){
                $this->classes[spl_object_hash($type)]["skip"] = false;
            }
        }
        return $this->classes[spl_object_hash($type)]["class"];
    }

    /**
     * @param Type $type
     * @param string $name
     * @param PHPClass $parentClass
     * @return \Goetas\Xsd\XsdToPhp\Php\Structure\PHPClass
     */
    private function visitTypeAnonymous(Type $type, $name, PHPClass $parentClass)
    {
        if (! isset($this->classes[spl_object_hash($type)])) {
            $this->classes[spl_object_hash($type)]["class"] = $class = new PHPClass();
            $class->setName($this->getNamingStrategy()->getAnonymousTypeName($type, $name));

            $class->setNamespace($parentClass->getNamespace() . "\\" . $parentClass->getName());
            $class->setDoc($type->getDoc());

            $this->visitTypeBase($class, $type);

            if ($type instanceof SimpleType){
                $this->classes[spl_object_hash($type)]["skip"] = true;
            }
        }
        return $this->classes[spl_object_hash($type)]["class"];
    }

    private function visitComplexType(PHPClass $class, ComplexType $type)
    {
        $schema = $type->getSchema();
        foreach ($type->getElements() as $element) {
            if ($element instanceof Group) {
                $this->visitGroup($class, $schema, $element);
            } else {
                $property = $this->visitElement($class, $schema, $element);
                $class->addProperty($property);
            }
        }
    }

    private function visitSimpleType(PHPClass $class, SimpleType $type)
    {
        if ($restriction = $type->getRestriction()) {
            $parent = $restriction->getBase();

            if ($parent instanceof Type) {
                $this->handleClassExtension($class, $parent);
            }

            foreach ($restriction->getChecks() as $typeCheck => $checks) {
                foreach ($checks as $check) {
                    $class->addCheck('__value', $typeCheck, $check);
                }
            }
        } elseif ($unions = $type->getUnions()) {
            $types = array();
            foreach ($unions as $i => $unon) {
                if (! $unon->getName()) {
                    $types[] = $this->visitTypeAnonymous($unon, $type->getName() . $i, $class);
                } else {
                    $types[] = $this->visitType($unon);
                }
            }

            if ($candidato = reset($types)) {
                $class->setExtends($candidato);
            }
        }
    }

    private function handleClassExtension(PHPClass $class, Type $type)
    {

        if ($alias = $this->getTypeAlias($type)) {
            $c = PHPClass::createFromFQCN($alias);
            $val = new PHPProperty('__value');
            $val->setType($c);
            $c->addProperty($val);
            $class->setExtends($c);
        } else {
            $extension = $this->visitType($type, true);
            $class->setExtends($extension);
        }
    }

    private function visitBaseComplexType(PHPClass $class, BaseComplexType $type)
    {
        $parent = $type->getParent();
        if ($parent) {
            $parentType = $parent->getBase();
            if ($parentType instanceof Type) {
                $this->handleClassExtension($class, $parentType);
            }
        }
        $schema = $type->getSchema();

        foreach ($type->getAttributes() as $attr) {
            if ($attr instanceof AttributeGroup) {
                $this->visitAttributeGroup($class, $schema, $attr);
            } else {
                $property = $this->visitAttribute($class, $schema, $attr);
                $class->addProperty($property);
            }
        }
    }

    private function visitAttribute(PHPClass $class, Schema $schema, AttributeItem $attribute, $arrayize = true)
    {
        $property = new PHPProperty();
        $property->setName(Inflector::camelize($attribute->getName()));

        if ($arrayize && $itemOfArray = $this->isArrayType($attribute->getType())) {
            if ($attribute->getType()->getName()) {
                $arg = new PHPArg(Inflector::camelize($attribute->getName()));
                $arg->setType($this->visitType($itemOfArray));
                $property->setType(new PHPClassOf($arg));
            } else {
                $property->setType($this->visitTypeAnonymous($attribute->getType(), $attribute->getName(), $class));
            }
        } else {
            $property->setType($this->findPHPClass($class, $attribute, true));
        }

        $property->setDoc($attribute->getDoc());
        return $property;
    }

    /**
     *
     * @param PHPClass $class
     * @param Schema $schema
     * @param Element $element
     * @param boolean $arrayize
     * @return \Goetas\Xsd\XsdToPhp\Structure\PHPProperty
     */
    private function visitElement(PHPClass $class, Schema $schema, ElementSingle $element, $arrayize = true)
    {
        $property = new PHPProperty();
        $property->setName(Inflector::camelize($element->getName()));
        $property->setDoc($element->getDoc());

        $t = $element->getType();

        if ($arrayize) {
            if ($itemOfArray = $this->isArrayType($t)) {
                if(!$itemOfArray->getName()){
                    $classType = $this->visitTypeAnonymous($itemOfArray, $element->getName(), $class);
                }else{
                    $classType = $this->visitType($itemOfArray);
                }

                $arg = new PHPArg(Inflector::camelize($element->getName()));
                $arg->setType($classType);
                $property->setType(new PHPClassOf($arg));
                return $property;
            }elseif ($itemOfArray = $this->isArrayNestedElement($t)) {
                if(!$t->getName()){
                    $classType = $this->visitTypeAnonymous($t, $element->getName(), $class);
                }else{
                    $classType = $this->visitType($t);
                }
                $elementProp = $this->visitElement($classType, $schema, $itemOfArray, false);
                $property->setType(new PHPClassOf($elementProp));
                return $property;
            } elseif ($this->isArrayElement($element)) {
                $arg = new PHPArg(Inflector::camelize($element->getName()));
                $arg->setType($this->findPHPClass($class, $element));
                $arg->setDefault('array()');
                $property->setType(new PHPClassOf($arg));
                return $property;
            }
        }

        $property->setType($this->findPHPClass($class, $element, true));
        return $property;
    }

    private function findPHPClass(PHPClass $class, Item $node, $force = false)
    {

        if ($node instanceof ElementRef) {
            return $this->visitElementDef($node->getReferencedElement());
        }

        if (! $node->getType()->getName()) {
            return $this->visitTypeAnonymous($node->getType(), $node->getName(), $class);
        } else {
            return $this->visitType($node->getType(), $force);
        }
    }
}
