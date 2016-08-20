<?php
/**
 * Contains \jamesiarmes\PhpEws\Type\ExtendedPropertyType.
 */

namespace jamesiarmes\PhpEws\Type;

use \jamesiarmes\PhpEws\Type;

/**
 * Identifies extended MAPI properties on folders and items.
 *
 * @package php-ews\Type
 */
class ExtendedPropertyType extends Type
{
    /**
     * Identifies an extended MAPI property to get, set, or create.
     *
     * @since Exchange 2007
     *
     * @var \jamesiarmes\PhpEws\Type\PathToExtendedFieldType
     */
    public $ExtendedFieldURI;

    /**
     * Contains the value of single-valued MAPI extended property.
     *
     * @since Exchange 2007
     *
     * @var string
     */
    public $Value;

    /**
     * Contains a collection of values for a multivalued extended MAPI property.
     *
     * @since Exchange 2007
     *
     * @var \jamesiarmes\PhpEws\ArrayType\NonEmptyArrayOfPropertyValuesType
     */
    public $Values;
}
