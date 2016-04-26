<?php

namespace jamesiarmes\PEWS\API\Type;

use jamesiarmes\PEWS\API\Type;

/**
 * Class representing DelegatePermissionsType
 *
 *
 * XSD Type: DelegatePermissionsType
 *
 * @method string getCalendarFolderPermissionLevel()
 * @method DelegatePermissionsType setCalendarFolderPermissionLevel(string $calendarFolderPermissionLevel)
 * @method string getTasksFolderPermissionLevel()
 * @method DelegatePermissionsType setTasksFolderPermissionLevel(string $tasksFolderPermissionLevel)
 * @method string getInboxFolderPermissionLevel()
 * @method DelegatePermissionsType setInboxFolderPermissionLevel(string $inboxFolderPermissionLevel)
 * @method string getContactsFolderPermissionLevel()
 * @method DelegatePermissionsType setContactsFolderPermissionLevel(string $contactsFolderPermissionLevel)
 * @method string getNotesFolderPermissionLevel()
 * @method DelegatePermissionsType setNotesFolderPermissionLevel(string $notesFolderPermissionLevel)
 * @method string getJournalFolderPermissionLevel()
 * @method DelegatePermissionsType setJournalFolderPermissionLevel(string $journalFolderPermissionLevel)
 */
class DelegatePermissionsType extends Type
{

    /**
     * @var string
     */
    protected $calendarFolderPermissionLevel = null;

    /**
     * @var string
     */
    protected $tasksFolderPermissionLevel = null;

    /**
     * @var string
     */
    protected $inboxFolderPermissionLevel = null;

    /**
     * @var string
     */
    protected $contactsFolderPermissionLevel = null;

    /**
     * @var string
     */
    protected $notesFolderPermissionLevel = null;

    /**
     * @var string
     */
    protected $journalFolderPermissionLevel = null;
}
