<?php
/**
 * Contains \jamesiarmes\PhpEws\Type\DelegatePermissionsType.
 */

namespace jamesiarmes\PhpEws\Type;

use \jamesiarmes\PhpEws\Type;

/**
 * Contains the delegate permission-level settings for a user.
 *
 * @package php-ews\Type
 */
class DelegatePermissionsType extends Type
{
    /**
     * Contains the permissions for the default Calendar folder.
     *
     * @since Exchange 2007 SP1
     *
     * @var string
     *
     * @see \jamesiarmes\PhpEws\Enumeration\DelegateFolderPermissionLevelType
     */
    public $CalendarFolderPermissionLevel;

    /**
     * Contains the permissions for the default Contacts folder.
     *
     * @since Exchange 2007 SP1
     *
     * @var string
     *
     * @see \jamesiarmes\PhpEws\Enumeration\DelegateFolderPermissionLevelType
     */
    public $ContactsFolderPermissionLevel;

    /**
     * Contains the permissions for the default Inbox folder.
     *
     * @since Exchange 2007 SP1
     *
     * @var string
     *
     * @see \jamesiarmes\PhpEws\Enumeration\DelegateFolderPermissionLevelType
     */
    public $InboxFolderPermissionLevel;

    /**
     * Contains the permissions for the default Journal folder.
     *
     * @since Exchange 2007 SP1
     *
     * @var string
     *
     * @see \jamesiarmes\PhpEws\Enumeration\DelegateFolderPermissionLevelType
     */
    public $JournalFolderPermissionLevel;

    /**
     * Contains the permissions for the default Notes folder.
     *
     * @since Exchange 2007 SP1
     *
     * @var string
     *
     * @see \jamesiarmes\PhpEws\Enumeration\DelegateFolderPermissionLevelType
     */
    public $NotesFolderPermissionLevel;

    /**
     * Contains the permissions for the default Task folder.
     *
     * @since Exchange 2007 SP1
     *
     * @var string
     *
     * @see \jamesiarmes\PhpEws\Enumeration\DelegateFolderPermissionLevelType
     */
    public $TasksFolderPermissionLevel;
}
