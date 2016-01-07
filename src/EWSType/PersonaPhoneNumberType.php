<?php
/**
 * Contains EWSType_PersonaPhoneNumberType.
 */

/**
 * Represents a phone number and type information and is associated with a set
 * of attributions.
 *
 * @package php-ews\Types
 */
class EWSType_PersonaPhoneNumberType extends EWSType
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
