<?php
/**
 * Contains \jamesiarmes\PhpEws\ArrayType\ArrayOfPostalAddressAttributedValuesType.
 */

namespace jamesiarmes\PhpEws\ArrayType;

use \jamesiarmes\PhpEws\ArrayType;

/**
 * Defines an array of business addresses and the identifiers of their source
 * attributions.
 *
 * @package php-ews\Array
 */
class ArrayOfPostalAddressAttributedValuesType extends ArrayType
{
    /**
     * Specifies an instance of an array of postal addresses and their
     * associated attributions.
     *
     * @since Exchange 2013
     *
     * @var \jamesiarmes\PhpEws\Type\PostalAddressAttributedValueType[]
     */
    public $PostalAddressAttributedValue = array();
}
