<?php

namespace jamesiarmes\PEWS\API\Messages;

/**
 * Class representing SyncFolderItemsType
 *
 *
 * XSD Type: SyncFolderItemsType
 *
 * @method SyncFolderItemsType getItemShape()
 * @method SyncFolderItemsType setItemShape($itemShape)
 * @method SyncFolderItemsType getSyncFolderId()
 * @method SyncFolderItemsType setSyncFolderId($syncFolderId)
 * @method SyncFolderItemsType getSyncState()
 * @method SyncFolderItemsType setSyncState($syncState)
 * @method SyncFolderItemsType getIgnore()
 * @method SyncFolderItemsType setIgnore($ignore)
 * @method SyncFolderItemsType getMaxChangesReturned()
 * @method SyncFolderItemsType setMaxChangesReturned($maxChangesReturned)
 * @method SyncFolderItemsType getSyncScope()
 * @method SyncFolderItemsType setSyncScope($syncScope)
 */
class SyncFolderItemsType extends BaseRequestType
{

    /**
     * @property \jamesiarmes\PEWS\API\TypeTest\ItemResponseShapeType $itemShape
     */
    protected $itemShape = null;

    /**
     * @property \jamesiarmes\PEWS\API\TypeTest\TargetFolderIdType $syncFolderId
     */
    protected $syncFolderId = null;

    /**
     * @property string $syncState
     */
    protected $syncState = null;

    /**
     * @property array $ignore
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

