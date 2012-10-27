<?php
/**
 * Contains EWSType_DeleteItemFieldType.
 */

/**
 * Represents an operation to delete a given property from an item during an
 * UpdateItem call.
 *
 * @package php-ews\Types
 *
 * @todo Extend EWSType_ItemChangeDescriptionType.
 */
class EWSType_DeleteItemFieldType extends EWSType
{
    /**
     * Identifies extended MAPI properties.
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
     * Identifies individual members of a dictionary property.
     *
     * @since Exchange 2007
     *
     * @var EWSType_PathToIndexedFieldType
     */
    public $IndexedFieldURI;
}
