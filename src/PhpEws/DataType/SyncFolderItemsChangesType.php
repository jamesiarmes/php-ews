<?php

namespace PhpEws\DataType;

use PhpEws\DataType;

/**
 * Definition of the SyncFolderItemsChangesType type
 */
class SyncFolderItemsChangesType extends DataType
{
    /**
     * Create property
     *
     * @var SyncFolderItemsCreateOrUpdateType
     */
    public $Create;

    /**
     * Update property
     *
     * @var SyncFolderItemsCreateOrUpdateType
     */
    public $Update;

    /**
     * Delete property
     *
     * @var SyncFolderItemsDeleteType
     */
    public $Delete;

    /**
     * ReadFlagChange property
     *
     * @var SyncFolderItemsReadFlagType
     */
    public $ReadFlagChange;
}
