<?php
/**
 * Definition of the SyncFolderHierarchyResponseMessageType type
 *
 * @package php-ews
 * @subpackage Types
 */

/**
 * Definition of the SyncFolderHierarchyResponseMessageType type
 */
class EWSType_SyncFolderHierarchyResponseMessageType extends EWSType
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
     * @var EWSType_SyncFolderHierarchyChangesType
     */
    public $Changes;
}
