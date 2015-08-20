<?php

namespace jamesiarmes\PEWS\API\Type;

use jamesiarmes\PEWS\API\Type;

/**
 * Class representing SyncFolderHierarchyCreateOrUpdateType
 *
 *
 * XSD Type: SyncFolderHierarchyCreateOrUpdateType
 *
 * @method SyncFolderHierarchyCreateOrUpdateType getFolder()
 * @method SyncFolderHierarchyCreateOrUpdateType setFolder(FolderType $folder)
 * @method SyncFolderHierarchyCreateOrUpdateType getCalendarFolder()
 * @method SyncFolderHierarchyCreateOrUpdateType setCalendarFolder(CalendarFolderType $calendarFolder)
 * @method SyncFolderHierarchyCreateOrUpdateType getContactsFolder()
 * @method SyncFolderHierarchyCreateOrUpdateType setContactsFolder(ContactsFolderType $contactsFolder)
 * @method SyncFolderHierarchyCreateOrUpdateType getSearchFolder()
 * @method SyncFolderHierarchyCreateOrUpdateType setSearchFolder(SearchFolderType $searchFolder)
 * @method SyncFolderHierarchyCreateOrUpdateType getTasksFolder()
 * @method SyncFolderHierarchyCreateOrUpdateType setTasksFolder(TasksFolderType $tasksFolder)
 */
class SyncFolderHierarchyCreateOrUpdateType extends Type
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

