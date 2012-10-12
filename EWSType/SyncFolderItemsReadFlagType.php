<?php
/**
 * Definition of the SyncFolderItemsReadFlagType type
 *
 * @package php-ews
 * @subpackage Types
 */

/**
 * Definition of the SyncFolderItemsReadFlagType type
 */
class EWSType_SyncFolderItemsReadFlagType extends EWSType
{
    /**
     * ItemId property
     *
     * @var EWSType_ItemIdType
     */
    public $ItemId;

    /**
     * IsRead property
     *
     * @var boolean
     */
    public $IsRead;
}
