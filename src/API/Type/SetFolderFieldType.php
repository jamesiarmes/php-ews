<?php

namespace jamesiarmes\PEWS\API\Type;

/**
 * Class representing SetFolderFieldType
 *
 *
 * XSD Type: SetFolderFieldType
 *
 * @method SetFolderFieldType getFolder()
 * @method SetFolderFieldType setFolder(FolderType $folder)
 * @method SetFolderFieldType getCalendarFolder()
 * @method SetFolderFieldType setCalendarFolder(CalendarFolderType $calendarFolder)
 * @method SetFolderFieldType getContactsFolder()
 * @method SetFolderFieldType setContactsFolder(ContactsFolderType $contactsFolder)
 * @method SetFolderFieldType getSearchFolder()
 * @method SetFolderFieldType setSearchFolder(SearchFolderType $searchFolder)
 * @method SetFolderFieldType getTasksFolder()
 * @method SetFolderFieldType setTasksFolder(TasksFolderType $tasksFolder)
 */
class SetFolderFieldType extends FolderChangeDescriptionType
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

