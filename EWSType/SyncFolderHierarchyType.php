<?php
/**
 * Definition of the SyncFolderHierarchyType type
 *
 * @package php-ews
 * @subpackage Types
 */

/**
 * Definition of the SyncFolderHierarchyType type
 */
class EWSType_SyncFolderHierarchyType extends EWSType
{
    /**
     * FolderShape property
     *
     * @var EWSType_FolderResponseShapeType
     */
    public $FolderShape;

    /**
     * SyncFolderId property
     *
     * @var EWSType_TargetFolderIdType
     */
    public $SyncFolderId;

    /**
     * SyncState property
     *
     * @var string
     */
    public $SyncState;

    /**
     * Constructor
     */
    public function __construct()
    {
        $this->schema = array(
            array(
                'name' => 'FolderShape',
                'required' => false,
                'type' => 'FolderResponseShapeType',
            ),
            array(
                'name' => 'SyncFolderId',
                'required' => false,
                'type' => 'TargetFolderIdType',
            ),
            array(
                'name' => 'SyncState',
                'required' => false,
                'type' => 'string',
            ),
        );
    }
}
