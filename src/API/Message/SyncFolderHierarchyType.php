<?php

namespace jamesiarmes\PEWS\API\Message;

/**
 * Class representing SyncFolderHierarchyType
 *
 *
 * XSD Type: SyncFolderHierarchyType
 *
 * @method SyncFolderHierarchyType getFolderShape()
 * @method SyncFolderHierarchyType setFolderShape(\jamesiarmes\PEWS\API\Type\FolderResponseShapeType $folderShape)
 * @method SyncFolderHierarchyType getSyncFolderId()
 * @method SyncFolderHierarchyType setSyncFolderId(\jamesiarmes\PEWS\API\Type\TargetFolderIdType $syncFolderId)
 * @method SyncFolderHierarchyType getSyncState()
 * @method SyncFolderHierarchyType setSyncState(string $syncState)
 */
class SyncFolderHierarchyType extends BaseRequestType
{

    /**
     * @property \jamesiarmes\PEWS\API\Type\FolderResponseShapeType $folderShape
     */
    protected $folderShape = null;

    /**
     * @property \jamesiarmes\PEWS\API\Type\TargetFolderIdType $syncFolderId
     */
    protected $syncFolderId = null;

    /**
     * @property string $syncState
     */
    protected $syncState = null;
}
