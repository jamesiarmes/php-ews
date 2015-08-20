<?php

namespace jamesiarmes\PEWS\API\Message;

/**
 * Class representing SyncFolderItemsResponseMessageType
 *
 *
 * XSD Type: SyncFolderItemsResponseMessageType
 *
 * @method string getSyncState()
 * @method SyncFolderItemsResponseMessageType setSyncState(string $syncState)
 * @method boolean getIncludesLastItemInRange()
 * @method SyncFolderItemsResponseMessageType setIncludesLastItemInRange(boolean $includesLastItemInRange)
 * @method \jamesiarmes\PEWS\API\Type\SyncFolderItemsChangesType getChanges()
 * @method SyncFolderItemsResponseMessageType setChanges(\jamesiarmes\PEWS\API\Type\SyncFolderItemsChangesType $changes)
 */
class SyncFolderItemsResponseMessageType extends ResponseMessageType
{

    /**
     * @var string
     */
    protected $syncState = null;

    /**
     * @var boolean
     */
    protected $includesLastItemInRange = null;

    /**
     * @var \jamesiarmes\PEWS\API\Type\SyncFolderItemsChangesType
     */
    protected $changes = null;
}
