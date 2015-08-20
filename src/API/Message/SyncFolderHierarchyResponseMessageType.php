<?php

namespace jamesiarmes\PEWS\API\Message;

/**
 * Class representing SyncFolderHierarchyResponseMessageType
 *
 *
 * XSD Type: SyncFolderHierarchyResponseMessageType
 *
 * @method SyncFolderHierarchyResponseMessageType getSyncState()
 * @method SyncFolderHierarchyResponseMessageType setSyncState(string $syncState)
 * @method SyncFolderHierarchyResponseMessageType getIncludesLastFolderInRange()
 * @method SyncFolderHierarchyResponseMessageType setIncludesLastFolderInRange(boolean $includesLastFolderInRange)
 * @method SyncFolderHierarchyResponseMessageType getChanges()
 * @method SyncFolderHierarchyResponseMessageType setChanges(\jamesiarmes\PEWS\API\Type\SyncFolderHierarchyChangesType $changes)
 */
class SyncFolderHierarchyResponseMessageType extends ResponseMessageType
{

    /**
     * @property string $syncState
     */
    protected $syncState = null;

    /**
     * @property boolean $includesLastFolderInRange
     */
    protected $includesLastFolderInRange = null;

    /**
     * @property \jamesiarmes\PEWS\API\Type\SyncFolderHierarchyChangesType $changes
     */
    protected $changes = null;
}
