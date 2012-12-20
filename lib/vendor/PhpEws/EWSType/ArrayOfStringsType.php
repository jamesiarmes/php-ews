<?php
/**
 * Definition of the ArrayOfStringsType type
 *
 * @package php-ews
 * @subpackage Types
 */

namespace \PhpEws\EWSType;

/**
 * Definition of the ArrayOfStringsType type
 */
class ArrayOfStringsType extends EWSType
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
