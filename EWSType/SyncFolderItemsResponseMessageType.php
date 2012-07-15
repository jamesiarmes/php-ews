<?php
/**
 * Definition of the SyncFolderItemsResponseMessageType type
 *
 * @package php-ews
 * @subpackage Types
 */

/**
 * Definition of the SyncFolderItemsResponseMessageType type
 */
class EWSType_SyncFolderItemsResponseMessageType extends EWSType
{
    /**
     * SyncState property
     *
     * @var string
     */
    public $SyncState;

    /**
     * IncludesLastItemInRange property
     *
     * @var boolean
     */
    public $IncludesLastItemInRange;

    /**
     * Changes property
     *
     * @var EWSType_SyncFolderItemsChangesType
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
                'name' => 'IncludesLastItemInRange',
                'required' => false,
                'type' => 'boolean',
            ),
            array(
                'name' => 'Changes',
                'required' => false,
                'type' => 'SyncFolderItemsChangesType',
            ),
        );
    }
}
