<?php
/**
 * Contains DelegatePermissionsType.
 */

namespace jamesiarmes\EWS\Types;

use jamesiarmes\EWS\EWSType;

/**
 * Contains the delegate permission-level settings for a user.
 *
 * @package jamesiarmes\EWS\Types
 */
class DelegatePermissionsType extends EWSType
{
    /**
     * Contains the permissions for the default Calendar folder.
     *
     * @since Exchange 2007 SP1
     *
     * @var DelegateFolderPermissionLevelType
     */
    public $CalendarFolderPermissionLevel;

    /**
     * Contains the permissions for the default Contacts folder.
     *
     * @since Exchange 2007 SP1
     *
     * @var DelegateFolderPermissionLevelType
     */
    public $ContactsFolderPermissionLevel;

    /**
     * Contains the permissions for the default Inbox folder.
     *
     * @since Exchange 2007 SP1
     *
     * @var DelegateFolderPermissionLevelType
     */
    public $InboxFolderPermissionLevel;

    /**
     * Contains the permissions for the default Journal folder.
     *
     * @since Exchange 2007 SP1
     *
     * @var DelegateFolderPermissionLevelType
     */
    public $JournalFolderPermissionLevel;

    /**
     * Contains the permissions for the default Notes folder.
     *
     * @since Exchange 2007 SP1
     *
     * @var DelegateFolderPermissionLevelType
     */
    public $NotesFolderPermissionLevel;

    /**
     * Contains the permissions for the default Task folder.
     *
     * @since Exchange 2007 SP1
     *
     * @var DelegateFolderPermissionLevelType
     */
    public $TasksFolderPermissionLevel;
}
