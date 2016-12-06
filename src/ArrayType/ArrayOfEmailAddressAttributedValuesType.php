<?php
/**
 * Contains \jamesiarmes\PhpEws\ArrayType\ArrayOfEmailAddressAttributedValuesType.
 */

namespace jamesiarmes\PhpEws\ArrayType;

use \jamesiarmes\PhpEws\ArrayType;

/**
 * Defines an array of EmailAddressAttributedValue values and the identifiers of
 * their source attributions.
 *
 * @package php-ews\Array
 */
class ArrayOfEmailAddressAttributedValuesType extends ArrayType
{
    /**
     * Specifies an instance of an array of email addresses and their associated
     * attributions.
     *
     * @since Exchange 2013
     *
     * @var \jamesiarmes\PhpEws\Type\EmailAddressAttributedValueType[]
     */
    public $EmailAddressAttributedValue = array();
}
