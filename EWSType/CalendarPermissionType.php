<?php
/**
 * Contains EWSType_CalendarPermissionType.
 */

/**
 * Defines the access that a user has to a Calendar folder.
 *
 * @package php-ews\Types
 *
 * @todo Extend EWSType_BasePermissionType.
 */
class EWSType_CalendarPermissionType extends EWSType
{
    /**
     * Represents the permission level that a user has on a Calendar folder.
     *
     * @since Exchange 2007 SP1
     *
     * @var EWSType_CalendarPermissionLevelType
     */
    public $CalendarPermissionLevel;

    /**
     * Indicates whether a user has permission to create items in a folder.
     *
     * @since Exchange 2007 SP1
     *
     * @var boolean
     */
    public $CanCreateItems;

    /**
     * Indicates whether a user has permission to create subfolders in a folder.
     *
     * @since Exchange 2007 SP1
     *
     * @var boolean
     */
    public $CanCreateSubFolders;

    /**
     * Indicates whether a user has permission to delete items in a folder.
     *
     * @since Exchange 2007 SP1
     *
     * @var EWSType_PermissionActionType
     */
    public $DeleteItems;

    /**
     * Indicates whether a user has permission to edit items in a folder.
     *
     * @since Exchange 2007 SP1
     *
     * @var EWSType_PermissionActionType
     */
    public $EditItems;

    /**
     * Indicates whether a user is a contact for a folder.
     *
     * @since Exchange 2007 SP1
     *
     * @var boolean
     */
    public $IsFolderContact;

    /**
     * Indicates whether a user is the owner of a folder.
     *
     * @since Exchange 2007 SP1
     *
     * @var boolean
     */
    public $IsFolderOwner;

    /**
     * Indicates whether a user can view a folder.
     *
     * @since Exchange 2007 SP1
     *
     * @var boolean
     */
    public $IsFolderVisible;

    /**
     * Represents the combination of permissions that a user has on a folder.
     *
     * @since Exchange 2007 SP1
     *
     * @var EWSType_PermissionLevelType
     */
    public $PermissionLevel;

    /**
     * Indicates whether a user has permission to read items within a folder.
     *
     * @since Exchange 2007 SP1
     *
     * @var EWSType_CalendarPermissionReadAccessType
     */
    public $ReadItems;

    /**
     * Identifies a delegate user or a user who has folder access permissions.
     *
     * @since Exchange 2007 SP1
     *
     * @var EWSType_UserIdType
     */
    public $UserId;
}
