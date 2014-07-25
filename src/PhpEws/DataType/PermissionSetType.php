<?php

namespace PhpEws\DataType;

use PhpEws\DataType;
/**
 * Definition of the PermissionSetType type
 *
 * @package php-ews
 * @subpackage Types
 */

/**
 * Definition of the PermissionSetType type
 */
class PermissionSetType extends DataType
{
    /**
     * Permissions property
     *
     * @var EWSType_ArrayOfPermissionsType
     */
    public $Permissions;

    /**
     * UnknownEntries property
     *
     * @var EWSType_ArrayOfUnknownEntriesType
     */
    public $UnknownEntries;
}
