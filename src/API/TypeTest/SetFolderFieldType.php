<?php

namespace jamesiarmes\PEWS\API\TypeTest;

/**
 * Class representing SetFolderFieldType
 *
 *
 * XSD Type: SetFolderFieldType
 *
 * @method SetFolderFieldType getFolder()
 * @method SetFolderFieldType setFolder($folder)
 * @method SetFolderFieldType getCalendarFolder()
 * @method SetFolderFieldType setCalendarFolder($calendarFolder)
 * @method SetFolderFieldType getContactsFolder()
 * @method SetFolderFieldType setContactsFolder($contactsFolder)
 * @method SetFolderFieldType getSearchFolder()
 * @method SetFolderFieldType setSearchFolder($searchFolder)
 * @method SetFolderFieldType getTasksFolder()
 * @method SetFolderFieldType setTasksFolder($tasksFolder)
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

