<?php
/**
 * Contains \jamesiarmes\PhpEws\ArrayType\ArrayOfExtendedPropertyAttributedValueType.
 */

namespace jamesiarmes\PhpEws\ArrayType;

use \jamesiarmes\PhpEws\ArrayType;

/**
 * Defines the extended properties used for a persona.
 *
 * @package php-ews\Array
 */
class ArrayOfExtendedPropertyAttributedValueType extends ArrayType
{
    /**
     * Specifies extended properties for a persona.
     *
     * @since Exchange 2013
     *
     * @var \jamesiarmes\PhpEws\Type\ExtendedPropertyAttributedValueType[]
     */
    public $ExtendedPropertyAttributedValue = array();
}
