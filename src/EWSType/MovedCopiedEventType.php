<?php
/**
 * Contains EWSType_MovedCopiedEventType.
 */

/**
 * Represents an event in which an item or folder is copied.
 *
 * @package php-ews\Types
 *
 * @todo Extend EWSType_BaseObjectChangedEventType.
 */
class EWSType_MovedCopiedEventType extends EWSType
{
    /**
     * Represents the identifier of the folder.
     *
     * @since Exchange 2007
     *
     * @var EWSType_FolderIdType
     */
    public $FolderId;

    /**
     * Represents the identifier of the item.
     *
     * @since Exchange 2007
     *
     * @var EWSType_ItemIdType
     */
    public $ItemId;

    /**
     * Represents the folder identifier of the original folder before it was
     * copied.
     *
     * @since Exchange 2007
     *
     * @var EWSType_FolderIdType
     */
    public $OldFolderId;

    /**
     * Contains the unique identifier of the original item before it was copied.
     *
     * @since Exchange 2007
     *
     * @var EWSType_ItemIdType
     */
    public $OldItemId;

    /**
     * Contains the identifier of the original parent folder of an item or
     * folder that was copied.
     *
     * @since Exchange 2007
     *
     * @var EWSType_FolderIdType
     */
    public $OldParentFolderId;

    /**
     * Represents the identifier of the folder that contains the copy.
     *
     * @since Exchange 2007
     *
     * @var EWSType_FolderIdType
     */
    public $ParentFolderId;

    /**
     * Represents the timestamp of a copy item/folder mailbox event.
     *
     * @since Exchange 2007
     *
     * @var string
     *
     * @todo Make a DateTime object.
     */
    public $TimeStamp;

    /**
     * Represents an events bookmark in the mailbox events table.
     *
     * @since Exchange 2007
     *
     * @var string
     */
    public $Watermark;
}
