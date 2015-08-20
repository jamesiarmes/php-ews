<?php

namespace jamesiarmes\PEWS\API\Type;

use jamesiarmes\PEWS\API\Type;

/**
 * Class representing ArrayOfFoldersType
 *
 *
 * XSD Type: ArrayOfFoldersType
 *
 * @method ArrayOfFoldersType getFolder()
 * @method ArrayOfFoldersType setFolder(array $folder)
 * @method ArrayOfFoldersType getCalendarFolder()
 * @method ArrayOfFoldersType setCalendarFolder(array $calendarFolder)
 * @method ArrayOfFoldersType getContactsFolder()
 * @method ArrayOfFoldersType setContactsFolder(array $contactsFolder)
 * @method ArrayOfFoldersType getSearchFolder()
 * @method ArrayOfFoldersType setSearchFolder(array $searchFolder)
 * @method ArrayOfFoldersType getTasksFolder()
 * @method ArrayOfFoldersType setTasksFolder(array $tasksFolder)
 */
class ArrayOfFoldersType extends Type
{

    /**
     * @property \jamesiarmes\PEWS\API\Type\FolderType[] $folder
     */
    protected $folder = null;

    /**
     * @property \jamesiarmes\PEWS\API\Type\CalendarFolderType[] $calendarFolder
     */
    protected $calendarFolder = null;

    /**
     * @property \jamesiarmes\PEWS\API\Type\ContactsFolderType[] $contactsFolder
     */
    protected $contactsFolder = null;

    /**
     * @property \jamesiarmes\PEWS\API\Type\SearchFolderType[] $searchFolder
     */
    protected $searchFolder = null;

    /**
     * @property \jamesiarmes\PEWS\API\Type\TasksFolderType[] $tasksFolder
     */
    protected $tasksFolder = null;
}
