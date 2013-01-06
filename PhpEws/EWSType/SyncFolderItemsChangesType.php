<?php
/**
 * Definition of the SyncFolderItemsChangesType type
 *
 * @package php-ews
 * @subpackage Types
 */

namespace PhpEws\EWSType;

/**
 * Definition of the SyncFolderItemsChangesType type
 */
class SyncFolderItemsChangesType extends EWSType
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
}
