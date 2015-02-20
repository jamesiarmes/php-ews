<?php
/**
 * Contains BaseObjectChangedEventType.
 */

namespace jamesiarmes\EWS\Types;

use jamesiarmes\EWS\EWSType;

/**
 * Represents an event in which an item or folder is created.
 *
 * @package jamesiarmes\EWS\Types
 *
 * @todo Extend BaseNotificationEventType.
 */
class BaseObjectChangedEventType extends EWSType
{
    /**
     * Represents the identifier of the folder.
     *
     * @since Exchange 2007
     *
     * @var FolderIdType
     */
    public $FolderId;

    /**
     * Represents the identifier of the item.
     *
     * @since Exchange 2007
     *
     * @var ItemIdType
     */
    public $ItemId;

    /**
     * Represents the identifier of the folder that contains the copy.
     *
     * @since Exchange 2007
     *
     * @var FolderIdType
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
