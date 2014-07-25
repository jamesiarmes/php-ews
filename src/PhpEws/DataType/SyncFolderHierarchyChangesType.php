<?php

namespace PhpEws\DataType;

use PhpEws\DataType;
/**
 * Definition of the SyncFolderHierarchyChangesType type
 *
 * @package php-ews
 * @subpackage Types
 */

/**
 * Definition of the SyncFolderHierarchyChangesType type
 */
class SyncFolderHierarchyChangesType extends DataType
{
    /**
     * Create property
     *
     * @var EWSType_SyncFolderHierarchyCreateOrUpdateType
     */
    public $Create;

    /**
     * Update property
     *
     * @var EWSType_SyncFolderHierarchyCreateOrUpdateType
     */
    public $Update;

    /**
     * Delete property
     *
     * @var EWSType_SyncFolderHierarchyDeleteType
     */
    public $Delete;
}
