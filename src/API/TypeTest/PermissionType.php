<?php

namespace jamesiarmes\PEWS\API\TypeTest;

/**
 * Class representing PermissionType
 *
 * A permission on a folder
 * XSD Type: PermissionType
 *
 * @method PermissionType getReadItems()
 * @method PermissionType setReadItems($readItems)
 * @method PermissionType getPermissionLevel()
 * @method PermissionType setPermissionLevel($permissionLevel)
 */
class PermissionType extends BasePermissionType
{

    /**
     * @property string $readItems
     */
    protected $readItems = null;

    /**
     * @property string $permissionLevel
     */
    protected $permissionLevel = null;


}

