<?php

namespace PhpEws\DataType;

use PhpEws\DataType;

/**
 * Definition of the NonEmptyArrayOfBaseFolderIdsType type
 */
class NonEmptyArrayOfBaseFolderIdsType extends DataType
{
    /**
     * FolderId property
     *
     * @var EWSType_FolderIdType
     */
    public $FolderId;

    /**
     * DistinguishedFolderId property
     *
     * @var EWSType_DistinguishedFolderIdType
     */
    public $DistinguishedFolderId;
}
