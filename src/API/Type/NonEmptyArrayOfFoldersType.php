<?php

namespace jamesiarmes\PEWS\API\Type;

use jamesiarmes\PEWS\API\Type;

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
class NonEmptyArrayOfFoldersType extends Type
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

