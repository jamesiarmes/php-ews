<?php

namespace PhpEws\DataType;

use PhpEws\DataType;
/**
 * Definition of the ArrayOfStringsType type
 *
 * @package php-ews
 * @subpackage Types
 */

/**
 * Definition of the ArrayOfStringsType type
 */
class ArrayOfStringsType extends DataType
{
    /**
     * String property
     *
     * @var string
     */
    public $String;

    /**
     * Properly converts the value of this type to a string.
     *
     * @return string
     */
    public function __toString()
    {
        return $this->String;
    }
}
