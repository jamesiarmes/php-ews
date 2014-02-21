<?php
/**
 * Definition of the SyncFolderHierarchyResponseMessageType type
 *
 * @package php-ews
* @subpackage Types
 */

namespace EWSType;

use PhpEws;
/**
 * Definition of the SyncFolderHierarchyResponseMessageType type
 */
class SyncFolderHierarchyResponseMessageType extends PhpEws\EWSType
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
