<?php
/**
 * Contains \jamesiarmes\PhpEws\ArrayType\ArrayOfPhoneNumberAttributedValuesType.
 */

namespace jamesiarmes\PhpEws\ArrayType;

use \jamesiarmes\PhpEws\ArrayType;

/**
 * Represents an array of phone numbers and the identifiers of their source
 * attributions for the associated persona.
 *
 * @package php-ews\Array
 */
class ArrayOfPhoneNumberAttributedValuesType extends ArrayType
{
    /**
     * Specifies an instance of an array of phone numbers and their associated
     * attributions.
     *
     * @since Exchange 2013
     *
     * @var \jamesiarmes\PhpEws\Type\PhoneNumberAttributedValueType[]
     */
    public $PhoneNumberAttributedValue = array();
}
