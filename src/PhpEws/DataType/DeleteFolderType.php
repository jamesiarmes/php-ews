<?php

namespace PhpEws\DataType;

use PhpEws\DataType;

/**
 * Definition of the DeleteFolderType type
 */
class DeleteFolderType extends DataType
{
    /**
     * FolderIds property
     *
     * @var NonEmptyArrayOfBaseFolderIdsType
     */
    public $FolderIds;

    /**
     * DeleteType property
     *
     * @var DisposalType
     */
    public $DeleteType;
}
