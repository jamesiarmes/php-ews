<?php

namespace jamesiarmes\PEWS\API\Type;

/**
 * Class representing PermissionType
 *
 * A permission on a folder
 * XSD Type: PermissionType
 *
 * @method PermissionType getReadItems()
 * @method PermissionType setReadItems(string $readItems)
 * @method PermissionType getPermissionLevel()
 * @method PermissionType setPermissionLevel(string $permissionLevel)
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

