<?php

namespace jamesiarmes\PEWS\API\Type;

/**
 * Class representing PermissionType
 *
 * A permission on a folder
 * XSD Type: PermissionType
 *
 * @method string getReadItems()
 * @method PermissionType setReadItems(string $readItems)
 * @method string getPermissionLevel()
 * @method PermissionType setPermissionLevel(string $permissionLevel)
 */
class PermissionType extends BasePermissionType
{

    /**
     * @var string
     */
    protected $readItems = null;

    /**
     * @var string
     */
    protected $permissionLevel = null;
}
