<?php

namespace jamesiarmes\PEWS\API\Messages;

/**
 * Class representing SyncFolderHierarchyType
 *
 *
 * XSD Type: SyncFolderHierarchyType
 *
 * @method SyncFolderHierarchyType getFolderShape()
 * @method SyncFolderHierarchyType setFolderShape($folderShape)
 * @method SyncFolderHierarchyType getSyncFolderId()
 * @method SyncFolderHierarchyType setSyncFolderId($syncFolderId)
 * @method SyncFolderHierarchyType getSyncState()
 * @method SyncFolderHierarchyType setSyncState($syncState)
 */
class SyncFolderHierarchyType extends BaseRequestType
{

    /**
     * @property \jamesiarmes\PEWS\API\TypeTest\FolderResponseShapeType $folderShape
     */
    protected $folderShape = null;

    /**
     * @property \jamesiarmes\PEWS\API\TypeTest\TargetFolderIdType $syncFolderId
     */
    protected $syncFolderId = null;

    /**
     * @property string $syncState
     */
    protected $syncState = null;


}

