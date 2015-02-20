<?php
/**
 * Contains CopyItemType.
 */

namespace jamesiarmes\EWS\Types;

use jamesiarmes\EWS\EWSType;

/**
 * Defines a request to copy an item in a mailbox in the Exchange store.
 *
 * @package jamesiarmes\EWS\Types
 *
 * @todo Extend BaseMoveCopyItemType.
 */
class CopyItemType extends EWSType
{
    /**
     * Contains an array of identified items to copy or move to the folder
     * represented by the ToFolderId element.
     *
     * @since Exchange 2007
     *
     * @var NonEmptyArrayOfBaseItemIdsType
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
     * @var TargetFolderIdType
     */
    public $ToFolderId;
}
