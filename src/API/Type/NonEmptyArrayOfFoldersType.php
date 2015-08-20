<?php

namespace jamesiarmes\PEWS\API\Type;

use jamesiarmes\PEWS\API\Type;

/**
 * Class representing NonEmptyArrayOfFoldersType
 *
 *
 * XSD Type: NonEmptyArrayOfFoldersType
 *
 * @method array getFolder()
 * @method NonEmptyArrayOfFoldersType setFolder(array $folder)
 * @method array getCalendarFolder()
 * @method NonEmptyArrayOfFoldersType setCalendarFolder(array $calendarFolder)
 * @method array getContactsFolder()
 * @method NonEmptyArrayOfFoldersType setContactsFolder(array $contactsFolder)
 * @method array getSearchFolder()
 * @method NonEmptyArrayOfFoldersType setSearchFolder(array $searchFolder)
 * @method array getTasksFolder()
 * @method NonEmptyArrayOfFoldersType setTasksFolder(array $tasksFolder)
 */
class NonEmptyArrayOfFoldersType extends Type
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
}
