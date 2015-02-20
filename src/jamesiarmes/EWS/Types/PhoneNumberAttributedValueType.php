<?php
/**
 * Contains PhoneNumberAttributedValueType.
 */

namespace jamesiarmes\EWS\Types;

use jamesiarmes\EWS\EWSType;

/**
 * Represents a phone number and its associated attributions.
 *
 * @package jamesiarmes\EWS\Types
 */
class PhoneNumberAttributedValueType extends EWSType
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
     * Specifies a phone number and type information.
     *
     * @since Exchange 2013
     *
     * @var PersonaPhoneNumberType
     */
    public $Value;
}
