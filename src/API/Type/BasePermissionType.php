<?php

namespace jamesiarmes\PEWS\API\Type;

use jamesiarmes\PEWS\API\Type;

/**
 * Class representing BasePermissionType
 *
 * A permission on a folder
 * XSD Type: BasePermissionType
 *
 * @method BasePermissionType getUserId()
 * @method BasePermissionType setUserId(UserIdType $userId)
 * @method BasePermissionType getCanCreateItems()
 * @method BasePermissionType setCanCreateItems(boolean $canCreateItems)
 * @method BasePermissionType getCanCreateSubFolders()
 * @method BasePermissionType setCanCreateSubFolders(boolean $canCreateSubFolders)
 * @method BasePermissionType getIsFolderOwner()
 * @method BasePermissionType setIsFolderOwner(boolean $isFolderOwner)
 * @method BasePermissionType getIsFolderVisible()
 * @method BasePermissionType setIsFolderVisible(boolean $isFolderVisible)
 * @method BasePermissionType getIsFolderContact()
 * @method BasePermissionType setIsFolderContact(boolean $isFolderContact)
 * @method BasePermissionType getEditItems()
 * @method BasePermissionType setEditItems(string $editItems)
 * @method BasePermissionType getDeleteItems()
 * @method BasePermissionType setDeleteItems(string $deleteItems)
 */
class BasePermissionType extends Type
{

    /**
     * @property \jamesiarmes\PEWS\API\Type\UserIdType $userId
     */
    protected $userId = null;

    /**
     * @property boolean $canCreateItems
     */
    protected $canCreateItems = null;

    /**
     * @property boolean $canCreateSubFolders
     */
    protected $canCreateSubFolders = null;

    /**
     * @property boolean $isFolderOwner
     */
    protected $isFolderOwner = null;

    /**
     * @property boolean $isFolderVisible
     */
    protected $isFolderVisible = null;

    /**
     * @property boolean $isFolderContact
     */
    protected $isFolderContact = null;

    /**
     * @property string $editItems
     */
    protected $editItems = null;

    /**
     * @property string $deleteItems
     */
    protected $deleteItems = null;
}
