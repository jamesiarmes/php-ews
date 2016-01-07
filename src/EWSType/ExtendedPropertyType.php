<?php
/**
 * Contains EWSType_ExtendedPropertyType.
 */

/**
 * Identifies extended MAPI properties on folders and items.
 *
 * @package php-ews\Types
 */
class EWSType_ExtendedPropertyType extends EWSType
{
    /**
     * Identifies an extended MAPI property to get, set, or create.
     *
     * @since Exchange 2007
     *
     * @var EWSType_PathToExtendedFieldType
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
     * @var EWSType_NonEmptyArrayOfPropertyValuesType
     */
    public $Values;
}
