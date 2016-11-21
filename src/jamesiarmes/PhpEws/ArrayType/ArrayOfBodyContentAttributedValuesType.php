<?php
/**
 * Contains \jamesiarmes\PhpEws\ArrayType\ArrayOfBodyContentAttributedValuesType.
 */

namespace jamesiarmes\PhpEws\ArrayType;

use \jamesiarmes\PhpEws\ArrayType;

/**
 * Defines an array of BodyContentAttributedValue elements.
 *
 * @package php-ews\Array
 */
class ArrayOfBodyContentAttributedValuesType extends ArrayType
{
    /**
     * Specifies the body content of an item.
     *
     * @var \jamesiarmes\PhpEws\Type\BodyContentAttributedValueType[]
     *
     * @since Exchange 2013
     */
    public $BodyContentAttributedValue;
}
