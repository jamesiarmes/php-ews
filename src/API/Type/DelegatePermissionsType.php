<?php

namespace jamesiarmes\PEWS\API\Type;

use jamesiarmes\PEWS\API\Type;

/**
 * Class representing DelegatePermissionsType
 *
 *
 * XSD Type: DelegatePermissionsType
 *
 * @method DelegatePermissionsType getCalendarFolderPermissionLevel()
 * @method DelegatePermissionsType setCalendarFolderPermissionLevel(string $calendarFolderPermissionLevel)
 * @method DelegatePermissionsType getTasksFolderPermissionLevel()
 * @method DelegatePermissionsType setTasksFolderPermissionLevel(string $tasksFolderPermissionLevel)
 * @method DelegatePermissionsType getInboxFolderPermissionLevel()
 * @method DelegatePermissionsType setInboxFolderPermissionLevel(string $inboxFolderPermissionLevel)
 * @method DelegatePermissionsType getContactsFolderPermissionLevel()
 * @method DelegatePermissionsType setContactsFolderPermissionLevel(string $contactsFolderPermissionLevel)
 * @method DelegatePermissionsType getNotesFolderPermissionLevel()
 * @method DelegatePermissionsType setNotesFolderPermissionLevel(string $notesFolderPermissionLevel)
 * @method DelegatePermissionsType getJournalFolderPermissionLevel()
 * @method DelegatePermissionsType setJournalFolderPermissionLevel(string $journalFolderPermissionLevel)
 */
class DelegatePermissionsType extends Type
{

    /**
     * @property string $calendarFolderPermissionLevel
     */
    protected $calendarFolderPermissionLevel = null;

    /**
     * @property string $tasksFolderPermissionLevel
     */
    protected $tasksFolderPermissionLevel = null;

    /**
     * @property string $inboxFolderPermissionLevel
     */
    protected $inboxFolderPermissionLevel = null;

    /**
     * @property string $contactsFolderPermissionLevel
     */
    protected $contactsFolderPermissionLevel = null;

    /**
     * @property string $notesFolderPermissionLevel
     */
    protected $notesFolderPermissionLevel = null;

    /**
     * @property string $journalFolderPermissionLevel
     */
    protected $journalFolderPermissionLevel = null;
}
