<?php

namespace PhpEws\DataType;

use PhpEws\DataType;

/**
 * Definition of the BaseMoveCopyItemType type
 */
class BaseMoveCopyItemType extends DataType
{
    /**
     * ToFolderId property
     *
     * @var TargetFolderIdType
     */
    public $ToFolderId;

    /**
     * ItemIds property
     *
     * @var NonEmptyArrayOfBaseItemIdsType
     */
    public $ItemIds;
}
