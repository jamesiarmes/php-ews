<?php
/**
 * Contains PersonaPhoneNumberType.
 */

namespace jamesiarmes\EWS\Types;

use jamesiarmes\EWS\EWSType;

/**
 * Represents a phone number and type information and is associated with a set
 * of attributions.
 *
 * @package jamesiarmes\EWS\Types
 */
class PersonaPhoneNumberType extends EWSType
{
    /**
     * Specifies the phone number.
     *
     * @since Exchange 2013
     *
     * @var string
     */
    public $Number;

    /**
     * Specifies the type of phone number, for example, "Home" or "Business".
     *
     * @since Exchange 2013
     *
     * @var string
     */
    public $Type;
}
