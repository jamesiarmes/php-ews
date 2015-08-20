<?php

namespace jamesiarmes\PEWS\API\Type;

use jamesiarmes\PEWS\API\Type;

/**
 * Class representing PermissionSetType
 *
 * The set of permissions on a folder
 * XSD Type: PermissionSetType
 *
 * @method PermissionSetType getPermissions()
 * @method PermissionSetType setPermissions(array $permissions)
 * @method PermissionSetType getUnknownEntries()
 * @method PermissionSetType setUnknownEntries(array $unknownEntries)
 */
class PermissionSetType extends Type
{

    /**
     * @property \jamesiarmes\PEWS\API\Type\PermissionType[] $permissions
     */
    protected $permissions = null;

    /**
     * @property string[] $unknownEntries
     */
    protected $unknownEntries = null;
}
