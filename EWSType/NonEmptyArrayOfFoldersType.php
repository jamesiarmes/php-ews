<?php
/**
 * Contains EWSType_NonEmptyArrayOfFoldersType.
 */

/**
 * Represents an array of folders that are used in folder operations.
 *
 * @package php-ews\Types
 */
class EWSType_NonEmptyArrayOfFoldersType extends EWSType
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
     * Represents a Contacts folder in a mailbox.
     *
     * @since Exchange 2007
     *
     * @var EWSType_ContactsFolderType
     */
    public $ContactsFolder;

    /**
     * Identifies a folder to create, get, find, synchronize, or update.
     *
     * @since Exchange 2007
     *
     * @var EWSType_FolderType
     */
    public $Folder;

    /**
     * Represents a Search folder contained in a mailbox.
     *
     * @since Exchange 2007
     *
     * @var EWSType_SearchFolderType
     */
    public $SearchFolder;

    /**
     * Represents a Tasks folder in a mailbox.
     *
     * @since Exchange 2007
     *
     * @var EWSType_TasksFolderType
     */
    public $TasksFolder;
}
