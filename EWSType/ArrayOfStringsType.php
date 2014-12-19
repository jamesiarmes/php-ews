<?php
/**
 * Contains EWSType_ArrayOfStringsType.
 */

/**
 * Represents a collection of strings.
 *
 * @package php-ews\Types
 */
class EWSType_ArrayOfStringsType extends EWSType
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
