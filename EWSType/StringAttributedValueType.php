<?php
/**
 * Contains EWSType_StringAttributedValueType.
 */

/**
 * Represents an attribute associated with a persona element.
 *
 * @package php-ews\Types
 */
class EWSType_StringAttributedValueType extends EWSType
{
    /**
     * Specifies an array of attributions for the Value element.
     *
     * @since Exchange 2013
     *
     * @var EWSType_ArrayOfValueAttributionsType
     */
    public $Attributions;

    /**
     * Contains the value of the property.
     *
     * @since Exchange 2013
     *
     * @var string
     */
    public $Value;
}
