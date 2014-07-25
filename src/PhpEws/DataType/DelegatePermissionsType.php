<?php

namespace PhpEws\DataType;

use PhpEws\DataType;

/**
 * Definition of the DelegatePermissionsType type
 */
class DelegatePermissionsType extends DataType
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
