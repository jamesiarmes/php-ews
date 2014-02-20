<?php
/**
 * Definition of the ArrayOfFoldersType type
 *
 * @package php-ews
 * @subpackage Types
 */

/**
 * Definition of the ArrayOfFoldersType type
 */
class EWSType_ArrayOfFoldersType extends EWSType
{
    /**
     * Folder property
     *
     * @var EWSType_FolderType
     */
    public $Folder;

    /**
     * CalendarFolder property
     *
     * @var EWSType_CalendarFolderType
     */
    public $CalendarFolder;

    /**
     * ContactsFolder property
     *
     * @var EWSType_ContactsFolderType
     */
    public $ContactsFolder;

    /**
     * SearchFolder property
     *
     * @var EWSType_SearchFolderType
     */
    public $SearchFolder;

    /**
     * TasksFolder property
     *
     * @var EWSType_TasksFolderType
     */
    public $TasksFolder;
}
