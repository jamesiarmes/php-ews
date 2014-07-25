<?php

namespace PhpEws\DataType;

use PhpEws\DataType;

/**
 * Definition of the SyncFolderHierarchyChangesType type
 */
class SyncFolderHierarchyChangesType extends DataType
{
    /**
     * Create property
     *
     * @var SyncFolderHierarchyCreateOrUpdateType
     */
    public $Create;

    /**
     * Update property
     *
     * @var SyncFolderHierarchyCreateOrUpdateType
     */
    public $Update;

    /**
     * Delete property
     *
     * @var SyncFolderHierarchyDeleteType
     */
    public $Delete;
}
