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
     * @var DelegateFolderPermissionLevelType
     */
    public $CalendarFolderPermissionLevel;

    /**
     * TasksFolderPermissionLevel property
     *
     * @var DelegateFolderPermissionLevelType
     */
    public $TasksFolderPermissionLevel;

    /**
     * InboxFolderPermissionLevel property
     *
     * @var DelegateFolderPermissionLevelType
     */
    public $InboxFolderPermissionLevel;

    /**
     * ContactsFolderPermissionLevel property
     *
     * @var DelegateFolderPermissionLevelType
     */
    public $ContactsFolderPermissionLevel;

    /**
     * NotesFolderPermissionLevel property
     *
     * @var DelegateFolderPermissionLevelType
     */
    public $NotesFolderPermissionLevel;

    /**
     * JournalFolderPermissionLevel property
     *
     * @var DelegateFolderPermissionLevelType
     */
    public $JournalFolderPermissionLevel;
}
