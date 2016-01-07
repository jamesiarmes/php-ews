<?php
/**
 * Contains EWSType_NonEmptyArrayOfPathsToElementType.
 */

/**
 * Defines additional properties for use in GetItem, UpdateItem, CreateItem,
 * FindItem, or FindFolder requests.
 *
 * @package php-ews\Types
 */
class EWSType_NonEmptyArrayOfPathsToElementType extends EWSType
{
    /**
     * Identifies extended MAPI properties to get, set, or create.
     *
     * @since Exchange 2007
     *
     * @var EWSType_PathToExtendedFieldType
     */
    public $ExtendedFieldURI;

    /**
     * Identifies frequently referenced properties by URI.
     *
     * @since Exchange 2007
     *
     * @var EWSType_PathToUnindexedFieldType
     */
    public $FieldURI;

    /**
     * Identifies frequently referenced dictionary properties by URI.
     *
     * @since Exchange 2007
     *
     * @var EWSType_PathToIndexedFieldType
     */
    public $IndexedFieldURI;
}
