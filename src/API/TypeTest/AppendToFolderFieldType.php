<?php

namespace jamesiarmes\PEWS\API\TypeTest;

/**
 * Class representing AppendToFolderFieldType
 *
 *
 * XSD Type: AppendToFolderFieldType
 *
 * @method AppendToFolderFieldType getFolder()
 * @method AppendToFolderFieldType setFolder($folder)
 * @method AppendToFolderFieldType getCalendarFolder()
 * @method AppendToFolderFieldType setCalendarFolder($calendarFolder)
 * @method AppendToFolderFieldType getContactsFolder()
 * @method AppendToFolderFieldType setContactsFolder($contactsFolder)
 * @method AppendToFolderFieldType getSearchFolder()
 * @method AppendToFolderFieldType setSearchFolder($searchFolder)
 * @method AppendToFolderFieldType getTasksFolder()
 * @method AppendToFolderFieldType setTasksFolder($tasksFolder)
 */
class AppendToFolderFieldType extends FolderChangeDescriptionType
{

    /**
     * @property \jamesiarmes\PEWS\API\TypeTest\FolderType $folder
     */
    protected $folder = null;

    /**
     * @property \jamesiarmes\PEWS\API\TypeTest\CalendarFolderType $calendarFolder
     */
    protected $calendarFolder = null;

    /**
     * @property \jamesiarmes\PEWS\API\TypeTest\ContactsFolderType $contactsFolder
     */
    protected $contactsFolder = null;

    /**
     * @property \jamesiarmes\PEWS\API\TypeTest\SearchFolderType $searchFolder
     */
    protected $searchFolder = null;

    /**
     * @property \jamesiarmes\PEWS\API\TypeTest\TasksFolderType $tasksFolder
     */
    protected $tasksFolder = null;


}

