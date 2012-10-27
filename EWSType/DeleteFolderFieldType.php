<?php
/**
 * Contains EWSType_DeleteFolderFieldType.
 */

/**
 * Represents an operation to delete a given property from a folder during an
 * UpdateFolder call.
 *
 * @package php-ews\Types
 *
 * @todo Extend EWSType_FolderChangeDescriptionType.
 */
class EWSType_DeleteFolderFieldType extends EWSType
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
