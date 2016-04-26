<?php

namespace jamesiarmes\PEWS\API\Message;

/**
 * Class representing SyncFolderHierarchyType
 *
 *
 * XSD Type: SyncFolderHierarchyType
 *
 * @method \jamesiarmes\PEWS\API\Type\FolderResponseShapeType getFolderShape()
 * @method SyncFolderHierarchyType setFolderShape(\jamesiarmes\PEWS\API\Type\FolderResponseShapeType $folderShape)
 * @method \jamesiarmes\PEWS\API\Type\TargetFolderIdType getSyncFolderId()
 * @method SyncFolderHierarchyType setSyncFolderId(\jamesiarmes\PEWS\API\Type\TargetFolderIdType $syncFolderId)
 * @method string getSyncState()
 * @method SyncFolderHierarchyType setSyncState(string $syncState)
 */
class SyncFolderHierarchyType extends BaseRequestType
{

    /**
     * @var \jamesiarmes\PEWS\API\Type\FolderResponseShapeType
     */
    protected $folderShape = null;

    /**
     * @var \jamesiarmes\PEWS\API\Type\TargetFolderIdType
     */
    protected $syncFolderId = null;

    /**
     * @var string
     */
    protected $syncState = null;
}
