<?php
/**
 * Contains \jamesiarmes\PhpEws\ArrayType\ArrayOfStringArrayAttributedValuesType.
 */

namespace jamesiarmes\PhpEws\ArrayType;

use \jamesiarmes\PhpEws\ArrayType;

/**
 * Specifies an array of string data and identifiers of their source
 * attributions.
 *
 * @package php-ews\Array
 */
class ArrayOfStringArrayAttributedValuesType extends ArrayType
{
    /**
     * Specifies an instance of an array of string data.
     *
     * @since Exchange 2013
     *
     * @var \jamesiarmes\PhpEws\Type\StringArrayAttributedValueType[]
     */
    public $StringArrayAttributedValue = array();
}
