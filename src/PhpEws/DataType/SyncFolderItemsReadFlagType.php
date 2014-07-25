<?php

namespace PhpEws\DataType;

use PhpEws\DataType;

/**
 * Definition of the SyncFolderItemsReadFlagType type
 */
class SyncFolderItemsReadFlagType extends DataType
{
    /**
     * ItemId property
     *
     * @var EWSType_ItemIdType
     */
    public $ItemId;

    /**
     * IsRead property
     *
     * @var boolean
     */
    public $IsRead;
}
