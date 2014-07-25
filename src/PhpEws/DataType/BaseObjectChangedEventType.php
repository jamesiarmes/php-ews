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
     * @var \DateTime
     */
    public $TimeStamp;

    /**
     * FolderId property
     *
     * @var FolderIdType
     */
    public $FolderId;

    /**
     * ItemId property
     *
     * @var ItemIdType
     */
    public $ItemId;

    /**
     * ParentFolderId property
     *
     * @var FolderIdType
     */
    public $ParentFolderId;
}
