<?php
/**
 * Definition of the SetFolderFieldType type
 *
 * @package php-ews
 * @subpackage Types
 */

/**
 * Definition of the SetFolderFieldType type
 */
class EWSType_SetFolderFieldType extends EWSType
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

    /**
     * Constructor
     */
    public function __construct()
    {
        $this->schema = array(
            array(
                'name' => 'Folder',
                'required' => false,
                'type' => 'FolderType',
            ),
            array(
                'name' => 'CalendarFolder',
                'required' => false,
                'type' => 'CalendarFolderType',
            ),
            array(
                'name' => 'ContactsFolder',
                'required' => false,
                'type' => 'ContactsFolderType',
            ),
            array(
                'name' => 'SearchFolder',
                'required' => false,
                'type' => 'SearchFolderType',
            ),
            array(
                'name' => 'TasksFolder',
                'required' => false,
                'type' => 'TasksFolderType',
            ),
        );
    }
}
