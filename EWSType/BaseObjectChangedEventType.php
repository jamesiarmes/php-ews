<?php
/**
 * Definition of the BaseObjectChangedEventType type
 *
 * @package php-ews
 * @subpackage Types
 */

/**
 * Definition of the BaseObjectChangedEventType type
 */
class EWSType_BaseObjectChangedEventType extends EWSType
{
    /**
     * TimeStamp property
     *
     * @var EWSType_dateTime
     */
    public $TimeStamp;

    /**
     * FolderId property
     *
     * @var EWSType_FolderIdType
     */
    public $FolderId;

    /**
     * ItemId property
     *
     * @var EWSType_ItemIdType
     */
    public $ItemId;

    /**
     * ParentFolderId property
     *
     * @var EWSType_FolderIdType
     */
    public $ParentFolderId;
}
