<?php
/**
 * Contains \jamesiarmes\PhpEws\ArrayType\NonEmptyArrayOfExtendedPropertyType.
 */

namespace jamesiarmes\PhpEws\ArrayType;

use \jamesiarmes\PhpEws\ArrayType;

/**
 * An array of additional properties.
 *
 * @package php-ews\Array
 */
class NonEmptyArrayOfExtendedPropertyType extends ArrayType
{
    /**
     * Identifies extended MAPI properties on folders and items.
     *
     * @since Exchange 2013
     *
     * @var \jamesiarmes\PhpEws\Type\ExtendedPropertyType[]
     */
    public $ExtendedProperty = array();
}
