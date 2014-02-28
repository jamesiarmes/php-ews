<?php
/**
 * Definition of the SyncFolderHierarchyType type
 *
 * @package php-ews
* @subpackage Types
 */

namespace EWSType;

use PhpEws;
/**
 * Definition of the SyncFolderHierarchyType type
 */
class SyncFolderHierarchyType extends PhpEws\EWSType
{
    /**
     * FolderShape property
     *
     * @var FolderResponseShapeType
     */
    public $FolderShape;

    /**
     * SyncFolderId property
     *
     * @var TargetFolderIdType
     */
    public $SyncFolderId;

    /**
     * SyncState property
     *
     * @var string
     */
    public $SyncState;
}
