<?php

namespace jamesiarmes\PEWS\API\Message;

/**
 * Class representing SyncFolderItemsType
 *
 *
 * XSD Type: SyncFolderItemsType
 *
 * @method \jamesiarmes\PEWS\API\Type\ItemResponseShapeType getItemShape()
 * @method SyncFolderItemsType setItemShape(\jamesiarmes\PEWS\API\Type\ItemResponseShapeType $itemShape)
 * @method \jamesiarmes\PEWS\API\Type\TargetFolderIdType getSyncFolderId()
 * @method SyncFolderItemsType setSyncFolderId(\jamesiarmes\PEWS\API\Type\TargetFolderIdType $syncFolderId)
 * @method string getSyncState()
 * @method SyncFolderItemsType setSyncState(string $syncState)
 * @method array getIgnore()
 * @method SyncFolderItemsType setIgnore(array $ignore)
 * @method integer getMaxChangesReturned()
 * @method SyncFolderItemsType setMaxChangesReturned(integer $maxChangesReturned)
 * @method string getSyncScope()
 * @method SyncFolderItemsType setSyncScope(string $syncScope)
 */
class SyncFolderItemsType extends BaseRequestType
{

    /**
     * @var \jamesiarmes\PEWS\API\Type\ItemResponseShapeType
     */
    protected $itemShape = null;

    /**
     * @var \jamesiarmes\PEWS\API\Type\TargetFolderIdType
     */
    protected $syncFolderId = null;

    /**
     * @var string
     */
    protected $syncState = null;

    /**
     * @var \jamesiarmes\PEWS\API\Type\ItemIdType[]
     */
    protected $ignore = null;

    /**
     * @var integer
     */
    protected $maxChangesReturned = null;

    /**
     * @var string
     */
    protected $syncScope = null;
}
