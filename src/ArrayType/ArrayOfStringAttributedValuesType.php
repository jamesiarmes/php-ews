<?php
/**
 * Contains \jamesiarmes\PhpEws\ArrayType\ArrayOfStringAttributedValuesType.
 */

namespace jamesiarmes\PhpEws\ArrayType;

use \jamesiarmes\PhpEws\ArrayType;

/**
 * Represents an array of names and the identifiers of their source attributions
 * for the associated persona.
 *
 * @package php-ews\Array
 */
class ArrayOfStringAttributedValuesType extends ArrayType
{
    /**
     * Specifies an instance in an array of attributes associated with a persona
     * element.
     *
     * @since Exchange 2013
     *
     * @var \jamesiarmes\PhpEws\Type\StringAttributedValueType[]
     */
    public $StringAttributedValue = array();
}
