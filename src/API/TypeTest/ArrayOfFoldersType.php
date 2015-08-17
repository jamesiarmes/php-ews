<?php

namespace jamesiarmes\PEWS\API\TypeTest;

use jamesiarmes\PEWS\API\TypeTest;

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
class ArrayOfFoldersType extends TypeTest
{

    /**
     * @property \jamesiarmes\PEWS\API\TypeTest\FolderType[] $folder
     */
    protected $folder = null;

    /**
     * @property \jamesiarmes\PEWS\API\TypeTest\CalendarFolderType[] $calendarFolder
     */
    protected $calendarFolder = null;

    /**
     * @property \jamesiarmes\PEWS\API\TypeTest\ContactsFolderType[] $contactsFolder
     */
    protected $contactsFolder = null;

    /**
     * @property \jamesiarmes\PEWS\API\TypeTest\SearchFolderType[] $searchFolder
     */
    protected $searchFolder = null;

    /**
     * @property \jamesiarmes\PEWS\API\TypeTest\TasksFolderType[] $tasksFolder
     */
    protected $tasksFolder = null;


}

