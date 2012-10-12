<?php
/**
 * Definition of the BasePermissionType type
 *
 * @package php-ews
 * @subpackage Types
 */

/**
 * Definition of the BasePermissionType type
 */
class EWSType_BasePermissionType extends EWSType
{
    /**
     * UserId property
     *
     * @var EWSType_UserIdType
     */
    public $UserId;

    /**
     * CanCreateItems property
     *
     * @var boolean
     */
    public $CanCreateItems;

    /**
     * CanCreateSubFolders property
     *
     * @var boolean
     */
    public $CanCreateSubFolders;

    /**
     * IsFolderOwner property
     *
     * @var boolean
     */
    public $IsFolderOwner;

    /**
     * IsFolderVisible property
     *
     * @var boolean
     */
    public $IsFolderVisible;

    /**
     * IsFolderContact property
     *
     * @var boolean
     */
    public $IsFolderContact;

    /**
     * EditItems property
     *
     * @var EWSType_PermissionActionType
     */
    public $EditItems;

    /**
     * DeleteItems property
     *
     * @var EWSType_PermissionActionType
     */
    public $DeleteItems;
}
