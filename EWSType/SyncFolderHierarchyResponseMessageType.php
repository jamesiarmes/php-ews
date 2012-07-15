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

    /**
     * Constructor
     */
    public function __construct()
    {
        $this->schema = array(
            array(
                'name' => 'SyncState',
                'required' => false,
                'type' => 'string',
            ),
            array(
                'name' => 'IncludesLastFolderInRange',
                'required' => false,
                'type' => 'boolean',
            ),
            array(
                'name' => 'Changes',
                'required' => false,
                'type' => 'SyncFolderHierarchyChangesType',
            ),
        );
    }
}
