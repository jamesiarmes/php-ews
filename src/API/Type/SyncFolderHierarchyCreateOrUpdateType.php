<?php

namespace jamesiarmes\PEWS\API\Type;

use jamesiarmes\PEWS\API\Type;

/**
 * Class representing SyncFolderHierarchyCreateOrUpdateType
 *
 *
 * XSD Type: SyncFolderHierarchyCreateOrUpdateType
 *
 * @method FolderType getFolder()
 * @method SyncFolderHierarchyCreateOrUpdateType setFolder(FolderType $folder)
 * @method CalendarFolderType getCalendarFolder()
 * @method SyncFolderHierarchyCreateOrUpdateType setCalendarFolder(CalendarFolderType $calendarFolder)
 * @method ContactsFolderType getContactsFolder()
 * @method SyncFolderHierarchyCreateOrUpdateType setContactsFolder(ContactsFolderType $contactsFolder)
 * @method SearchFolderType getSearchFolder()
 * @method SyncFolderHierarchyCreateOrUpdateType setSearchFolder(SearchFolderType $searchFolder)
 * @method TasksFolderType getTasksFolder()
 * @method SyncFolderHierarchyCreateOrUpdateType setTasksFolder(TasksFolderType $tasksFolder)
 */
class SyncFolderHierarchyCreateOrUpdateType extends Type
{

    /**
     * @var \jamesiarmes\PEWS\API\Type\FolderType
     */
    protected $folder = null;

    /**
     * @var \jamesiarmes\PEWS\API\Type\CalendarFolderType
     */
    protected $calendarFolder = null;

    /**
     * @var \jamesiarmes\PEWS\API\Type\ContactsFolderType
     */
    protected $contactsFolder = null;

    /**
     * @var \jamesiarmes\PEWS\API\Type\SearchFolderType
     */
    protected $searchFolder = null;

    /**
     * @var \jamesiarmes\PEWS\API\Type\TasksFolderType
     */
    protected $tasksFolder = null;
}
