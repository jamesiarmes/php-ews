<?php
/**
 * Contains \jamesiarmes\PhpEws\Type.
 */

namespace jamesiarmes\PhpEws;

/**
 * Base class for Exchange Web Service Types.
 *
 * @package php-ews\Type
 */
abstract class Type
{
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
}
