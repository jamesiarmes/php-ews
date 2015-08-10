<?php

namespace jamesiarmes\PEWS\API\TypeTest;

use jamesiarmes\PEWS\API\Type;

/**
 * Class representing SyncFolderHierarchyCreateOrUpdateType
 *
 *
 * XSD Type: SyncFolderHierarchyCreateOrUpdateType
 *
 * @method SyncFolderHierarchyCreateOrUpdateType getFolder()
 * @method SyncFolderHierarchyCreateOrUpdateType setFolder($folder)
 * @method SyncFolderHierarchyCreateOrUpdateType getCalendarFolder()
 * @method SyncFolderHierarchyCreateOrUpdateType setCalendarFolder($calendarFolder)
 * @method SyncFolderHierarchyCreateOrUpdateType getContactsFolder()
 * @method SyncFolderHierarchyCreateOrUpdateType setContactsFolder($contactsFolder)
 * @method SyncFolderHierarchyCreateOrUpdateType getSearchFolder()
 * @method SyncFolderHierarchyCreateOrUpdateType setSearchFolder($searchFolder)
 * @method SyncFolderHierarchyCreateOrUpdateType getTasksFolder()
 * @method SyncFolderHierarchyCreateOrUpdateType setTasksFolder($tasksFolder)
 */
class SyncFolderHierarchyCreateOrUpdateType extends Type
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

