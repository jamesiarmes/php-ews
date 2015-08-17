<?php

namespace jamesiarmes\PEWS\API\TypeTest;

use jamesiarmes\PEWS\API\TypeTest;

/**
 * Class representing BasePermissionType
 *
 * A permission on a folder
 * XSD Type: BasePermissionType
 *
 * @method BasePermissionType getUserId()
 * @method BasePermissionType setUserId($userId)
 * @method BasePermissionType getCanCreateItems()
 * @method BasePermissionType setCanCreateItems($canCreateItems)
 * @method BasePermissionType getCanCreateSubFolders()
 * @method BasePermissionType setCanCreateSubFolders($canCreateSubFolders)
 * @method BasePermissionType getIsFolderOwner()
 * @method BasePermissionType setIsFolderOwner($isFolderOwner)
 * @method BasePermissionType getIsFolderVisible()
 * @method BasePermissionType setIsFolderVisible($isFolderVisible)
 * @method BasePermissionType getIsFolderContact()
 * @method BasePermissionType setIsFolderContact($isFolderContact)
 * @method BasePermissionType getEditItems()
 * @method BasePermissionType setEditItems($editItems)
 * @method BasePermissionType getDeleteItems()
 * @method BasePermissionType setDeleteItems($deleteItems)
 */
class BasePermissionType extends TypeTest
{

    /**
     * @property \jamesiarmes\PEWS\API\TypeTest\UserIdType $userId
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

