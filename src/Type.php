<?php
/**
 * Contains \jamesiarmes\PEWS\Type.
 */

namespace jamesiarmes\PEWS;

/**
 * Base class for Exchange Web Service Types.
 *
 * @package php-ews\Type
 */
class Type
{
    /**
     * @var string
     */
    public $_ = "";

    public static function buildFromArray($array)
    {
        if (!self::arrayIsAssoc($array)) {
            return $array;
        }

        $object = new self();
        foreach ($array as $key => $value) {
            if (is_array($value)) {
                $value = self::buildFromArray($value);
            }

            //I think _value is a more expressive way to set string value, but Soap needs _
            if ($key === "_value") {
                $key = "_";
            }

            $object->$key = $value;
        }

        return $object;
    }

    public function toXmlObject()
    {
        $objectToReturn = new self();
        if ($this->__toString() !== "") {
            $objectToReturn->_ = $this->__toString();
        }

        $properties = get_object_vars($this);

        foreach ($properties as $name => $property) {
            if ($property instanceof Type) {
                $property = $property->toXmlObject();
            }

            //I think _value is a more expressive way to set string value, but Soap needs _
            if ($name == "_value") {
                $name = "_";
            }

            if ($property === null || (substr($name, 0, 1) == "_" && $name != "_")) {
                continue;
            }

            if (is_array($property) && $this->arrayIsAssoc($property)) {
                $property = $this->buildFromArray($property);
            }

            $objectToReturn->$name = $property;
        }

        return $objectToReturn;
    }

    public static function arrayIsAssoc($array)
    {
        return (bool)count(array_filter(array_keys($array), 'is_string'));
    }

    /**
     * Clones any object properties on a type object when it is cloned. Allows
     * for a deep clone required when using object to represent data types when
     * making a SOAP call.
     */
    public function __clone()
    {
        // Iterate over all properties on the current object.
        foreach (get_object_vars($this) as $property => $value) {
            // If the value of the property is an object then clone it.
            if (is_object($value)) {
                $this->$property = clone $value;
            } elseif (is_array($value)) {
                // The value is an array that may use objects as values. Iterate
                // over the array and clone any values that are objects into a
                // new array.
                // For some reason, if we try to set $this->$property to an
                // empty array then update it as we go it ends up being empty.
                // If we use a new array that we then set as the value of
                // $this->$property all is well.
                $new_value = array();
                foreach ($value as $index => $array_value) {
                    $new_value[$index] = (is_object($array_value) ? clone $array_value : $array_value);
                }

                // Set the property to the new array.
                $this->$property = $new_value;
            }
        }
    }

    public function __toString()
    {
        if (!is_string($this->_)) {
            return '';
        }

        return (string) $this->_;
    }
}
