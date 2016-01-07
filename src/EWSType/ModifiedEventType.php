<?php
/**
 * Contains EWSType_ModifiedEventType.
 */

/**
 * Represents an event in which an item or folder is modified.
 *
 * @package php-ews\Types
 *
 * @todo Extend EWSType_BaseObjectChangedEventType.
 */
class EWSType_ModifiedEventType extends EWSType
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
     * Represents the count of unread items within a given folder.
     *
     * @since Exchange 2007
     *
     * @var integer
     */
    public $UnreadCount;

    /**
     * Represents an events bookmark in the mailbox events table.
     *
     * @since Exchange 2007
     *
     * @var string
     */
    public $Watermark;
}
