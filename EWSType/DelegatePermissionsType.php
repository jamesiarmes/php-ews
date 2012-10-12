<?php
/**
 * Definition of the DelegatePermissionsType type
 *
 * @package php-ews
 * @subpackage Types
 */

/**
 * Definition of the DelegatePermissionsType type
 */
class EWSType_DelegatePermissionsType extends EWSType
{
    /**
     * CalendarFolderPermissionLevel property
     *
     * @var EWSType_DelegateFolderPermissionLevelType
     */
    public $CalendarFolderPermissionLevel;

    /**
     * TasksFolderPermissionLevel property
     *
     * @var EWSType_DelegateFolderPermissionLevelType
     */
    public $TasksFolderPermissionLevel;

    /**
     * InboxFolderPermissionLevel property
     *
     * @var EWSType_DelegateFolderPermissionLevelType
     */
    public $InboxFolderPermissionLevel;

    /**
     * ContactsFolderPermissionLevel property
     *
     * @var EWSType_DelegateFolderPermissionLevelType
     */
    public $ContactsFolderPermissionLevel;

    /**
     * NotesFolderPermissionLevel property
     *
     * @var EWSType_DelegateFolderPermissionLevelType
     */
    public $NotesFolderPermissionLevel;

    /**
     * JournalFolderPermissionLevel property
     *
     * @var EWSType_DelegateFolderPermissionLevelType
     */
    public $JournalFolderPermissionLevel;
}
