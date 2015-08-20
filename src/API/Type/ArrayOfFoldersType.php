<?php

namespace jamesiarmes\PEWS\API\Type;

use jamesiarmes\PEWS\API\Type;

/**
 * Class representing ArrayOfFoldersType
 *
 *
 * XSD Type: ArrayOfFoldersType
 *
 * @method array getFolder()
 * @method ArrayOfFoldersType setFolder(array $folder)
 * @method array getCalendarFolder()
 * @method ArrayOfFoldersType setCalendarFolder(array $calendarFolder)
 * @method array getContactsFolder()
 * @method ArrayOfFoldersType setContactsFolder(array $contactsFolder)
 * @method array getSearchFolder()
 * @method ArrayOfFoldersType setSearchFolder(array $searchFolder)
 * @method array getTasksFolder()
 * @method ArrayOfFoldersType setTasksFolder(array $tasksFolder)
 */
class ArrayOfFoldersType extends Type
{

    /**
     * @var \jamesiarmes\PEWS\API\Type\FolderType[]
     */
    protected $folder = null;

    /**
     * @var \jamesiarmes\PEWS\API\Type\CalendarFolderType[]
     */
    protected $calendarFolder = null;

    /**
     * @var \jamesiarmes\PEWS\API\Type\ContactsFolderType[]
     */
    protected $contactsFolder = null;

    /**
     * @var \jamesiarmes\PEWS\API\Type\SearchFolderType[]
     */
    protected $searchFolder = null;

    /**
     * @var \jamesiarmes\PEWS\API\Type\TasksFolderType[]
     */
    protected $tasksFolder = null;

    public function getAllFolders()
    {
        $folders = array();
        if ($this->folder !== null) {
            $folders = array_merge($folders, $this->folder);
        }

        if ($this->calendarFolder !== null) {
            $folders = array_merge($folders, $this->calendarFolder);
        }

        if ($this->contactsFolder !== null) {
            $folders = array_merge($folders, $this->contactsFolder);
        }

        if ($this->searchFolder !== null) {
            $folders = array_merge($folders, $this->searchFolder);
        }

        if ($this->tasksFolder !== null) {
            $folders = array_merge($folders, $this->tasksFolder);
        }

        return $folders;
    }
}
