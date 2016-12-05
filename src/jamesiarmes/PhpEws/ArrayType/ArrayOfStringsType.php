<?php
/**
 * Contains \jamesiarmes\PhpEws\ArrayType\ArrayOfStringsType.
 */

namespace jamesiarmes\PhpEws\ArrayType;

use \jamesiarmes\PhpEws\ArrayType;

/**
 * Represents a collection of strings.
 *
 * @package php-ews\Array
 */
class ArrayOfStringsType extends ArrayType
{
    /**
     * Contains a single string.
     *
     * @since Exchange 2007
     *
     * @var string[]
     */
    public $String = array();

    /**
     * Properly converts the value of this type to a string.
     *
     * @return string
     *
     * @todo Determine if this is needed.
     */
    public function __toString()
    {
        return $this->String;
    }
}
