<?php
/**
 * Definition of the SetFolderFieldType type
 *
 * @package php-ews
 * @subpackage Types
 */

namespace PhpEws\EWSType;

/**
 * Definition of the SetFolderFieldType type
 */
class SetFolderFieldType extends EWSType
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
