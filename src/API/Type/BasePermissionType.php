<?php

namespace jamesiarmes\PEWS\API\Type;

use jamesiarmes\PEWS\API\Type;

/**
 * Class representing BasePermissionType
 *
 * A permission on a folder
 * XSD Type: BasePermissionType
 *
 * @method UserIdType getUserId()
 * @method BasePermissionType setUserId(UserIdType $userId)
 * @method boolean isCanCreateItems()
 * @method boolean getCanCreateItems()
 * @method BasePermissionType setCanCreateItems(boolean $canCreateItems)
 * @method boolean isCanCreateSubFolders()
 * @method boolean getCanCreateSubFolders()
 * @method BasePermissionType setCanCreateSubFolders(boolean $canCreateSubFolders)
 * @method boolean isFolderOwner()
 * @method boolean getIsFolderOwner()
 * @method BasePermissionType setIsFolderOwner(boolean $isFolderOwner)
 * @method boolean isFolderVisible()
 * @method boolean getIsFolderVisible()
 * @method BasePermissionType setIsFolderVisible(boolean $isFolderVisible)
 * @method boolean isFolderContact()
 * @method boolean getIsFolderContact()
 * @method BasePermissionType setIsFolderContact(boolean $isFolderContact)
 * @method string getEditItems()
 * @method BasePermissionType setEditItems(string $editItems)
 * @method string getDeleteItems()
 * @method BasePermissionType setDeleteItems(string $deleteItems)
 */
class BasePermissionType extends Type
{

    /**
     * @var \jamesiarmes\PEWS\API\Type\UserIdType
     */
    protected $userId = null;

    /**
     * @var boolean
     */
    protected $canCreateItems = null;

    /**
     * @var boolean
     */
    protected $canCreateSubFolders = null;

    /**
     * @var boolean
     */
    protected $isFolderOwner = null;

    /**
     * @var boolean
     */
    protected $isFolderVisible = null;

    /**
     * @var boolean
     */
    protected $isFolderContact = null;

    /**
     * @var string
     */
    protected $editItems = null;

    /**
     * @var string
     */
    protected $deleteItems = null;
}
