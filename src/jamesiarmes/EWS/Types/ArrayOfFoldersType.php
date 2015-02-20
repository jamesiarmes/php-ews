<?php
/**
 * Contains ArrayOfFoldersType.
 */

namespace jamesiarmes\EWS\Types;

use jamesiarmes\EWS\EWSType;

/**
 * Represents an array of folders that are used in folder operations.
 *
 * @package jamesiarmes\EWS\Types
 */
class ArrayOfFoldersType extends EWSType
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
     * Represents a Contacts folder in a mailbox.
     *
     * @since Exchange 2007
     *
     * @var ContactsFolderType
     */
    public $ContactsFolder;

    /**
     * Identifies a folder to create, get, find, synchronize, or update.
     *
     * @since Exchange 2007
     *
     * @var FolderType
     */
    public $Folder;

    /**
     * Represents a Search folder contained in a mailbox.
     *
     * @since Exchange 2007
     *
     * @var SearchFolderType
     */
    public $SearchFolder;

    /**
     * Represents a Tasks folder in a mailbox.
     *
     * @since Exchange 2007
     *
     * @var TasksFolderType
     */
    public $TasksFolder;
}
