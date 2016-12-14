<?php
/**
 * Contains \jamesiarmes\PhpEws\Type\BasePermissionType.
 */

namespace jamesiarmes\PhpEws\Type;

use \jamesiarmes\PhpEws\Type;

/**
 * Base class for permission types.
 *
 * @package php-ews\Type
 */
abstract class BasePermissionType extends Type
{
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
     * @var string
     *
     * @see \jamesiarmes\PhpEws\Enumeration\PermissionActionType
     */
    public $DeleteItems;

    /**
     * Indicates whether a user has permission to edit items in a folder.
     *
     * @since Exchange 2007 SP1
     *
     * @var string
     *
     * @see \jamesiarmes\PhpEws\Enumeration\PermissionActionType
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
     * Identifies a delegate user or a user who has folders access permissions.
     *
     * @since Exchange 2007 SP1
     *
     * @var \jamesiarmes\PhpEws\Type\UserIdType
     */
    public $UserId;
}
