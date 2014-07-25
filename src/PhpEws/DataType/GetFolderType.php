<?php

namespace PhpEws\DataType;

use PhpEws\DataType;

/**
 * Definition of the GetFolderType type
 */
class GetFolderType extends DataType
{
    /**
     * FolderShape property
     *
     * @var FolderResponseShapeType
     */
    public $FolderShape;

    /**
     * FolderIds property
     *
     * @var NonEmptyArrayOfBaseFolderIdsType
     */
    public $FolderIds;
}
