<?php

namespace jamesiarmes\PEWS\API\Message;

/**
 * Class representing SyncFolderHierarchyResponseMessageType
 *
 *
 * XSD Type: SyncFolderHierarchyResponseMessageType
 *
 * @method string getSyncState()
 * @method SyncFolderHierarchyResponseMessageType setSyncState(string $syncState)
 * @method boolean getIncludesLastFolderInRange()
 * @method SyncFolderHierarchyResponseMessageType setIncludesLastFolderInRange(boolean $includesLastFolderInRange)
 * @method \jamesiarmes\PEWS\API\Type\SyncFolderHierarchyChangesType getChanges()
 * @method SyncFolderHierarchyResponseMessageType setChanges(\jamesiarmes\PEWS\API\Type\SyncFolderHierarchyChangesType $changes)
 */
class SyncFolderHierarchyResponseMessageType extends ResponseMessageType
{

    /**
     * @var string
     */
    protected $syncState = null;

    /**
     * @var boolean
     */
    protected $includesLastFolderInRange = null;

    /**
     * @var \jamesiarmes\PEWS\API\Type\SyncFolderHierarchyChangesType
     */
    protected $changes = null;
}
