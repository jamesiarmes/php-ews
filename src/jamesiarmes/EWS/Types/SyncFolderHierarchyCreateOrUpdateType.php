<?php
/**
 * Contains SyncFolderHierarchyCreateOrUpdateType.
 */

namespace jamesiarmes\EWS\Types;

use jamesiarmes\EWS\EWSType;

/**
 * Identifies a single folder to create in the local client store.
 *
 * @package jamesiarmes\EWS\Types
 */
class SyncFolderHierarchyCreateOrUpdateType extends EWSType
{
    /**
     * Represents a folder that primarily contains calendar items.
     *
     * @since Exchange 2007
     *
     * @var CalendarFolderType
     */
    public $CalendarFolder;

    /**
     * Represents a contact folder in a mailbox.
     *
     * @since Exchange 2007
     *
     * @var ContactsFolderType
     */
    public $ContactsFolder;

    /**
     * Defines the folder to create, get, find, synchronize, or update.
     *
     * @since Exchange 2007
     *
     * @var FolderType
     */
    public $Folder;

    /**
     * Represents a search folder contained in a mailbox.
     *
     * @since Exchange 2007
     *
     * @var SearchFolderType
     */
    public $SearchFolder;

    /**
     * Represents a task folder contained in a mailbox.
     *
     * @since Exchange 2007
     *
     * @var TasksFolderType
     */
    public $TasksFolder;
}
