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
 * @method PermissionSetType setPermissions(array $permissions)
 * @method PermissionSetType getUnknownEntries()
 * @method PermissionSetType setUnknownEntries(array $unknownEntries)
 */
class PermissionSetType extends TypeTest
{

    /**
     * @property \jamesiarmes\PEWS\API\TypeTest\PermissionType[] $permissions
     */
    protected $permissions = null;

    /**
     * @property string[] $unknownEntries
     */
    protected $unknownEntries = null;


}

