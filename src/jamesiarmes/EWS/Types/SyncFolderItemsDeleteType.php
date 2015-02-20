<?php
/**
 * Contains SyncFolderItemsDeleteType.
 */

namespace jamesiarmes\EWS\Types;

use jamesiarmes\EWS\EWSType;

/**
 * Identifies a single item to delete in the local client store.
 *
 * @package jamesiarmes\EWS\Types
 */
class SyncFolderItemsDeleteType extends EWSType
{
    /**
     * Contains the unique identifier and change key of an item in the Exchange store.
     *
     * @since Exchange 2007
     *
     * @var ItemIdType
     */
    public $ItemId;
}
