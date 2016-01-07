<?php
/**
 * Contains EWSType_SyncFolderItemsDeleteType.
 */

/**
 * Identifies a single item to delete in the local client store.
 *
 * @package php-ews\Types
 */
class EWSType_SyncFolderItemsDeleteType extends EWSType
{
    /**
     * Contains the unique identifier and change key of an item in the Exchange store.
     *
     * @since Exchange 2007
     *
     * @var EWSType_ItemIdType
     */
    public $ItemId;
}
