<?php
/**
 * Contains EWSType_PhoneNumberAttributedValueType.
 */

/**
 * Represents a phone number and its associated attributions.
 *
 * @package php-ews\Types
 */
class EWSType_PhoneNumberAttributedValueType extends EWSType
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
     * Specifies a phone number and type information.
     *
     * @since Exchange 2013
     *
     * @var EWSType_PersonaPhoneNumberType
     */
    public $Value;
}
