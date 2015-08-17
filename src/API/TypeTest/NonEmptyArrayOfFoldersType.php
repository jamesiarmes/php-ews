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
 * @method NonEmptyArrayOfFoldersType setFolder($folder)
 * @method NonEmptyArrayOfFoldersType getCalendarFolder()
 * @method NonEmptyArrayOfFoldersType setCalendarFolder($calendarFolder)
 * @method NonEmptyArrayOfFoldersType getContactsFolder()
 * @method NonEmptyArrayOfFoldersType setContactsFolder($contactsFolder)
 * @method NonEmptyArrayOfFoldersType getSearchFolder()
 * @method NonEmptyArrayOfFoldersType setSearchFolder($searchFolder)
 * @method NonEmptyArrayOfFoldersType getTasksFolder()
 * @method NonEmptyArrayOfFoldersType setTasksFolder($tasksFolder)
 */
class NonEmptyArrayOfFoldersType extends TypeTest
{

    /**
     * @property array $folder
     */
    protected $folder = null;

    /**
     * @property array $calendarFolder
     */
    protected $calendarFolder = null;

    /**
     * @property array $contactsFolder
     */
    protected $contactsFolder = null;

    /**
     * @property array $searchFolder
     */
    protected $searchFolder = null;

    /**
     * @property array $tasksFolder
     */
    protected $tasksFolder = null;


}

