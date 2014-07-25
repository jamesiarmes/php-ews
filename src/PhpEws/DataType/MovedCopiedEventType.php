<?php

namespace PhpEws\DataType;

use PhpEws\DataType;

/**
 * Definition of the MovedCopiedEventType type
 */
class MovedCopiedEventType extends DataType
{
    /**
     * OldFolderId property
     *
     * @var FolderIdType
     */
    public $OldFolderId;

    /**
     * OldItemId property
     *
     * @var ItemIdType
     */
    public $OldItemId;

    /**
     * OldParentFolderId property
     *
     * @var FolderIdType
     */
    public $OldParentFolderId;
}
