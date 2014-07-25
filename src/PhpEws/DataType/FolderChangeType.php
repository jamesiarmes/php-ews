<?php

namespace PhpEws\DataType;

use PhpEws\DataType;

/**
 * Definition of the FolderChangeType type
 */
class FolderChangeType extends DataType
{
    /**
     * FolderId property
     *
     * @var FolderIdType
     */
    public $FolderId;

    /**
     * DistinguishedFolderId property
     *
     * @var DistinguishedFolderIdType
     */
    public $DistinguishedFolderId;

    /**
     * Updates property
     *
     * @var NonEmptyArrayOfFolderChangeDescriptionsType
     */
    public $Updates;
}
