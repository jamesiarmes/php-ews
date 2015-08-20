<?php

namespace jamesiarmes\PEWS\API\Type;

/**
 * Class representing AppendToFolderFieldType
 *
 *
 * XSD Type: AppendToFolderFieldType
 *
 * @method AppendToFolderFieldType getFolder()
 * @method AppendToFolderFieldType setFolder(FolderType $folder)
 * @method AppendToFolderFieldType getCalendarFolder()
 * @method AppendToFolderFieldType setCalendarFolder(CalendarFolderType $calendarFolder)
 * @method AppendToFolderFieldType getContactsFolder()
 * @method AppendToFolderFieldType setContactsFolder(ContactsFolderType $contactsFolder)
 * @method AppendToFolderFieldType getSearchFolder()
 * @method AppendToFolderFieldType setSearchFolder(SearchFolderType $searchFolder)
 * @method AppendToFolderFieldType getTasksFolder()
 * @method AppendToFolderFieldType setTasksFolder(TasksFolderType $tasksFolder)
 */
class AppendToFolderFieldType extends FolderChangeDescriptionType
{

    /**
     * @property \jamesiarmes\PEWS\API\Type\FolderType $folder
     */
    protected $folder = null;

    /**
     * @property \jamesiarmes\PEWS\API\Type\CalendarFolderType $calendarFolder
     */
    protected $calendarFolder = null;

    /**
     * @property \jamesiarmes\PEWS\API\Type\ContactsFolderType $contactsFolder
     */
    protected $contactsFolder = null;

    /**
     * @property \jamesiarmes\PEWS\API\Type\SearchFolderType $searchFolder
     */
    protected $searchFolder = null;

    /**
     * @property \jamesiarmes\PEWS\API\Type\TasksFolderType $tasksFolder
     */
    protected $tasksFolder = null;
}
