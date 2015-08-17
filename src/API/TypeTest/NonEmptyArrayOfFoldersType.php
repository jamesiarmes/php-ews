<?php

namespace jamesiarmes\PEWS\API\TypeTest;

use jamesiarmes\PEWS\API\TypeTest;

/**
 * Class representing NonEmptyArrayOfFoldersType
 *
 *
 * XSD Type: NonEmptyArrayOfFoldersType
 *
 * @method NonEmptyArrayOfFoldersType getFolder()
 * @method NonEmptyArrayOfFoldersType setFolder(array $folder)
 * @method NonEmptyArrayOfFoldersType getCalendarFolder()
 * @method NonEmptyArrayOfFoldersType setCalendarFolder(array $calendarFolder)
 * @method NonEmptyArrayOfFoldersType getContactsFolder()
 * @method NonEmptyArrayOfFoldersType setContactsFolder(array $contactsFolder)
 * @method NonEmptyArrayOfFoldersType getSearchFolder()
 * @method NonEmptyArrayOfFoldersType setSearchFolder(array $searchFolder)
 * @method NonEmptyArrayOfFoldersType getTasksFolder()
 * @method NonEmptyArrayOfFoldersType setTasksFolder(array $tasksFolder)
 */
class NonEmptyArrayOfFoldersType extends TypeTest
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

