<?php

namespace jamesiarmes\PEWS\API\TypeTest;

use jamesiarmes\PEWS\API\TypeTest;

/**
 * Class representing PermissionSetType
 *
 * The set of permissions on a folder
 * XSD Type: PermissionSetType
 *
 * @method PermissionSetType getPermissions()
 * @method PermissionSetType setPermissions($permissions)
 * @method PermissionSetType getUnknownEntries()
 * @method PermissionSetType setUnknownEntries($unknownEntries)
 */
class PermissionSetType extends TypeTest
{

    /**
     * @property array $permissions
     */
    protected $permissions = null;

    /**
     * @property array $unknownEntries
     */
    protected $unknownEntries = null;


}

