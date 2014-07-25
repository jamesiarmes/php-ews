<?php

namespace PhpEws\DataType;

use PhpEws\DataType;

/**
 * Definition of the BasePermissionType type
 */
class BasePermissionType extends DataType
{
    /**
     * UserId property
     *
     * @var UserIdType
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
     * @var PermissionActionType
     */
    public $EditItems;

    /**
     * DeleteItems property
     *
     * @var PermissionActionType
     */
    public $DeleteItems;
}
