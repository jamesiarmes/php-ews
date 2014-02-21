<?php
/**
 * Definition of the PermissionSetType type
 *
 * @package php-ews
* @subpackage Types
 */

namespace EWSType;

use PhpEws;
/**
 * Definition of the PermissionSetType type
 */
class PermissionSetType extends PhpEws\EWSType
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
