<?php

namespace PhpEws\DataType;

use PhpEws\DataType;

/**
 * Definition of the BaseObjectChangedEventType type
 */
class BaseObjectChangedEventType extends DataType
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
