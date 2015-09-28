<?php

namespace jamesiarmes\PEWS\API\Type;

use jamesiarmes\PEWS\API\Type;

/**
 * Class representing ArrayOfFoldersType
 *
 *
 * XSD Type: ArrayOfFoldersType
 *
 * @method ArrayOfFoldersType addFolder(FolderType $folder)
 * @method FolderType[] getFolder()
 * @method ArrayOfFoldersType setFolder(array $folder)
 * @method ArrayOfFoldersType addCalendarFolder(CalendarFolderType $calendarFolder)
 * @method CalendarFolderType[] getCalendarFolder()
 * @method ArrayOfFoldersType setCalendarFolder(array $calendarFolder)
 * @method ArrayOfFoldersType addContactsFolder(ContactsFolderType $contactsFolder)
 * @method ContactsFolderType[] getContactsFolder()
 * @method ArrayOfFoldersType setContactsFolder(array $contactsFolder)
 * @method ArrayOfFoldersType addSearchFolder(SearchFolderType $searchFolder)
 * @method SearchFolderType[] getSearchFolder()
 * @method ArrayOfFoldersType setSearchFolder(array $searchFolder)
 * @method ArrayOfFoldersType addTasksFolder(TasksFolderType $tasksFolder)
 * @method TasksFolderType[] getTasksFolder()
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
            $folders = array_merge($folders, (is_array($this->folder) ? $this->folder : array($this->folder)));
        }

        if ($this->calendarFolder !== null) {
            $folders = array_merge(
                $folders,
                (is_array($this->calendarFolder) ? $this->calendarFolder : array($this->calendarFolder))
            );
        }

        if ($this->contactsFolder !== null) {
            $folders = array_merge(
                $folders,
                (is_array($this->contactsFolder) ? $this->contactsFolder : array($this->contactsFolder))
            );
        }

        if ($this->searchFolder !== null) {
            $folders = array_merge(
                $folders,
                (is_array($this->searchFolder) ? $this->searchFolder : array($this->searchFolder))
            );
        }

        if ($this->tasksFolder !== null) {
            $folders = array_merge(
                $folders,
                (is_array($this->tasksFolder) ? $this->tasksFolder : array($this->tasksFolder))
            );
            $folders = array_merge($folders, $this->tasksFolder);
        }

        return $folders;
    }
}
