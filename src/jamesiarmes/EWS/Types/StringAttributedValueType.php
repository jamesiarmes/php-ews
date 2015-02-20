<?php
/**
 * Contains StringAttributedValueType.
 */

namespace jamesiarmes\EWS\Types;

use jamesiarmes\EWS\EWSType;

/**
 * Represents an attribute associated with a persona element.
 *
 * @package jamesiarmes\EWS\Types
 */
class StringAttributedValueType extends EWSType
{
    /**
     * Specifies an array of attributions for the Value element.
     *
     * @since Exchange 2013
     *
     * @var ArrayOfValueAttributionsType
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
