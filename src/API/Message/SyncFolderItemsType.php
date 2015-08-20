<?php

namespace jamesiarmes\PEWS\API\Message;

/**
 * Class representing SyncFolderItemsType
 *
 *
 * XSD Type: SyncFolderItemsType
 *
 * @method SyncFolderItemsType getItemShape()
 * @method SyncFolderItemsType setItemShape(\jamesiarmes\PEWS\API\Type\ItemResponseShapeType $itemShape)
 * @method SyncFolderItemsType getSyncFolderId()
 * @method SyncFolderItemsType setSyncFolderId(\jamesiarmes\PEWS\API\Type\TargetFolderIdType $syncFolderId)
 * @method SyncFolderItemsType getSyncState()
 * @method SyncFolderItemsType setSyncState(string $syncState)
 * @method SyncFolderItemsType getIgnore()
 * @method SyncFolderItemsType setIgnore(array $ignore)
 * @method SyncFolderItemsType getMaxChangesReturned()
 * @method SyncFolderItemsType setMaxChangesReturned(integer $maxChangesReturned)
 * @method SyncFolderItemsType getSyncScope()
 * @method SyncFolderItemsType setSyncScope(string $syncScope)
 */
class SyncFolderItemsType extends BaseRequestType
{

    /**
     * @property \jamesiarmes\PEWS\API\Type\ItemResponseShapeType $itemShape
     */
    protected $itemShape = null;

    /**
     * @property \jamesiarmes\PEWS\API\Type\TargetFolderIdType $syncFolderId
     */
    protected $syncFolderId = null;

    /**
     * @property string $syncState
     */
    protected $syncState = null;

    /**
     * @property \jamesiarmes\PEWS\API\Type\ItemIdType[] $ignore
     */
    protected $ignore = null;

    /**
     * @property integer $maxChangesReturned
     */
    protected $maxChangesReturned = null;

    /**
     * @property string $syncScope
     */
    protected $syncScope = null;


}

