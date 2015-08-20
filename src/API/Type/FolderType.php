<?php

namespace jamesiarmes\PEWS\API\Type;

/**
 * Class representing FolderType
 *
 *
 * XSD Type: FolderType
 *
 * @method FolderType getPermissionSet()
 * @method FolderType setPermissionSet(PermissionSetType $permissionSet)
 * @method FolderType getUnreadCount()
 * @method FolderType setUnreadCount(integer $unreadCount)
 */
class FolderType extends BaseFolderType
{

    /**
     * @property \jamesiarmes\PEWS\API\Type\PermissionSetType $permissionSet
     */
    protected $permissionSet = null;

    /**
     * @property integer $unreadCount
     */
    protected $unreadCount = null;
}
