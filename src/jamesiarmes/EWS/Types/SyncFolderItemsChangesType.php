<?php
/**
 * Contains SyncFolderItemsChangesType.
 */

namespace jamesiarmes\EWS\Types;

use jamesiarmes\EWS\EWSType;

/**
 * Represents a sequence array of change types that represent the types of
 * differences between the items on the client and the items on the Exchange
 * server.
 *
 * @package jamesiarmes\EWS\Types
 */
class SyncFolderItemsChangesType extends EWSType
{
    /**
     * Identifies a single item to create in the local client store.
     *
     * @since Exchange 2007
     *
     * @var SyncFolderItemsCreateOrUpdateType
     */
    public $Create;

    /**
     * Identifies a single item to delete in the local client store.
     *
     * @since Exchange 2007
     *
     * @var SyncFolderItemsDeleteType
     */
    public $Delete;

    /**
     * Returned in SyncFolderItems operation responses when an item has been
     * read.
     *
     * This property is read-only.
     *
     * @since Exchange 2007 SP1
     *
     * @var SyncFolderItemsReadFlagType
     */
    public $ReadFlagChange;

    /**
     * Identifies a single item to update in the local client store.
     *
     * @since Exchange 2007
     *
     * @var SyncFolderItemsCreateOrUpdateType
     */
    public $Update;
}
