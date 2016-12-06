<?php
/**
 * Contains \jamesiarmes\PhpEws\ArrayType\ArrayOfExtendedAttributesType.
 */

namespace jamesiarmes\PhpEws\ArrayType;

use \jamesiarmes\PhpEws\ArrayType;

/**
 * Internal use only.
 *
 * @package php-ews\Array
 */
class ArrayOfExtendedAttributesType extends ArrayType
{
    /**
     * Internal use only.
     *
     * @since Exchange 2013
     *
     * @var \jamesiarmes\PhpEws\Type\ExtendedAttributeType[]
     */
    public $ExtendedAttribute = array();
}
