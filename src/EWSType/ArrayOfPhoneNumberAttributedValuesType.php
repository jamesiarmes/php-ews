<?php
/**
 * Contains EWSType_ArrayOfPhoneNumberAttributedValuesType.
 */

/**
 * Represents an array of phone numbers and the identifiers of their source
 * attributions for the associated persona.
 *
 * @package php-ews\Types
 */
class EWSType_ArrayOfPhoneNumberAttributedValuesType extends EWSType
{
    /**
     * Specifies an instance of an array of phone numbers and their associated
     * attributions.
     *
     * @since Exchange 2013
     *
     * @var EWSType_PhoneNumberAttributedValueType
     */
    public $PhoneNumberAttributedValue;
}
