<?php

namespace PhpEws\DataType;

use PhpEws\DataType;

/**
 * Definition of the SyncFolderHierarchyResponseMessageType type
 */
class SyncFolderHierarchyResponseMessageType extends DataType
{
    /**
     * SyncState property
     *
     * @var string
     */
    public $SyncState;

    /**
     * IncludesLastFolderInRange property
     *
     * @var boolean
     */
    public $IncludesLastFolderInRange;

    /**
     * Changes property
     *
     * @var SyncFolderHierarchyChangesType
     */
    public $Changes;
}
