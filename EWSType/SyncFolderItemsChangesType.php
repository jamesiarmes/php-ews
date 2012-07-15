<?php
/**
 * Definition of the SyncFolderItemsChangesType type
 *
 * @package php-ews
 * @subpackage Types
 */

/**
 * Definition of the SyncFolderItemsChangesType type
 */
class EWSType_SyncFolderItemsChangesType extends EWSType
{
    /**
     * Create property
     *
     * @var EWSType_SyncFolderItemsCreateOrUpdateType
     */
    public $Create;

    /**
     * Update property
     *
     * @var EWSType_SyncFolderItemsCreateOrUpdateType
     */
    public $Update;

    /**
     * Delete property
     *
     * @var EWSType_SyncFolderItemsDeleteType
     */
    public $Delete;

    /**
     * ReadFlagChange property
     *
     * @var EWSType_SyncFolderItemsReadFlagType
     */
    public $ReadFlagChange;

    /**
     * Constructor
     */
    public function __construct()
    {
        $this->schema = array(
            array(
                'name' => 'Create',
                'required' => false,
                'type' => 'SyncFolderItemsCreateOrUpdateType',
            ),
            array(
                'name' => 'Update',
                'required' => false,
                'type' => 'SyncFolderItemsCreateOrUpdateType',
            ),
            array(
                'name' => 'Delete',
                'required' => false,
                'type' => 'SyncFolderItemsDeleteType',
            ),
            array(
                'name' => 'ReadFlagChange',
                'required' => false,
                'type' => 'SyncFolderItemsReadFlagType',
            ),
        );
    }
}
