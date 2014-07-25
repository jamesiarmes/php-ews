<?php

namespace PhpEws\DataType;

use PhpEws\DataType;

/**
 * Definition of the PermissionSetType type
 */
class PermissionSetType extends DataType
{
    /**
     * Permissions property
     *
     * @var ArrayOfPermissionsType
     */
    public $Permissions;

    /**
     * UnknownEntries property
     *
     * @var ArrayOfUnknownEntriesType
     */
    public $UnknownEntries;
}
