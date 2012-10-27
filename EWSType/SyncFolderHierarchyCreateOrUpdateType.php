<?php
/**
 * Contains EWSType_SyncFolderHierarchyCreateOrUpdateType.
 */

/**
 * Identifies a single folder to create in the local client store.
 *
 * @package php-ews\Types
 */
class EWSType_SyncFolderHierarchyCreateOrUpdateType extends EWSType
{
    /**
     * Represents a folder that primarily contains calendar items.
     *
     * @since Exchange 2007
     *
     * @var EWSType_CalendarFolderType
     */
    public $CalendarFolder;

    /**
     * Represents a contact folder in a mailbox.
     *
     * @since Exchange 2007
     *
     * @var EWSType_ContactsFolderType
     */
    public $ContactsFolder;

    /**
     * Defines the folder to create, get, find, synchronize, or update.
     *
     * @since Exchange 2007
     *
     * @var EWSType_FolderType
     */
    public $Folder;

    /**
     * Represents a search folder contained in a mailbox.
     *
     * @since Exchange 2007
     *
     * @var EWSType_SearchFolderType
     */
    public $SearchFolder;

    /**
     * Represents a task folder contained in a mailbox.
     *
     * @since Exchange 2007
     *
     * @var EWSType_TasksFolderType
     */
    public $TasksFolder;
}
