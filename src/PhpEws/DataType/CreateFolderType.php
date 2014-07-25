<?php

namespace PhpEws\DataType;

use PhpEws\DataType;

/**
 * Definition of the CreateFolderType type
 */
class CreateFolderType extends DataType
{
    /**
     * ParentFolderId property
     *
     * @var TargetFolderIdType
     */
    public $ParentFolderId;

    /**
     * Folders property
     *
     * @var NonEmptyArrayOfFoldersType
     */
    public $Folders;
}
