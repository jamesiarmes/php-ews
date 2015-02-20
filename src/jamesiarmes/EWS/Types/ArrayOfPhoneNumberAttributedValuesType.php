<?php
/**
 * Contains ArrayOfPhoneNumberAttributedValuesType.
 */

namespace jamesiarmes\EWS\Types;

use jamesiarmes\EWS\EWSType;

/**
 * Represents an array of phone numbers and the identifiers of their source
 * attributions for the associated persona.
 *
 * @package jamesiarmes\EWS\Types
 */
class ArrayOfPhoneNumberAttributedValuesType extends EWSType
{
    /**
     * Specifies an instance of an array of phone numbers and their associated
     * attributions.
     *
     * @since Exchange 2013
     *
     * @var PhoneNumberAttributedValueType
     */
    public $PhoneNumberAttributedValue;
}
