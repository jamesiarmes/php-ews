<?php
/**
 * Definition of the SyncFolderHierarchyChangesType type
 *
 * @package php-ews
* @subpackage Types
 */

namespace EWSType;

use PhpEws;
/**
 * Definition of the SyncFolderHierarchyChangesType type
 */
class SyncFolderHierarchyChangesType extends PhpEws\EWSType
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
