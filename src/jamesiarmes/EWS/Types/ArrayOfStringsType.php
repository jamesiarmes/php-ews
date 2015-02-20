<?php
/**
 * Contains ArrayOfStringsType.
 */

namespace jamesiarmes\EWS\Types;

use jamesiarmes\EWS\EWSType;

/**
 * Represents a collection of strings.
 *
 * @package jamesiarmes\EWS\Types
 */
class ArrayOfStringsType extends EWSType
{
    /**
     * Contains a single string.
     *
     * @since Exchange 2007
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
