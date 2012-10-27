<?php
/**
 * Contains EWSType_CopyItemType.
 */

/**
 * Defines a request to copy an item in a mailbox in the Exchange store.
 *
 * @package php-ews\Types
 *
 * @todo Extend EWSType_BaseMoveCopyItemType.
 */
class EWSType_CopyItemType extends EWSType
{
    /**
     * Contains an array of identified items to copy or move to the folder
     * represented by the ToFolderId element.
     *
     * @since Exchange 2007
     *
     * @var EWSType_NonEmptyArrayOfBaseItemIdsType
     */
    public $ItemIds;

    /**
     * Indicates whether the item identifiers of new items are returned in the
     * response.
     *
     * @since Exchange 2010
     *
     * @var boolean
     */
    public $ReturnNewItemIds;

    /**
     * Represents the destination folder for the items.
     *
     * @since Exchange 2007
     *
     * @var EWSType_TargetFolderIdType
     */
    public $ToFolderId;
}
