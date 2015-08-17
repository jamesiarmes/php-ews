<?php

namespace jamesiarmes\PEWS\API\TypeTest;

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

