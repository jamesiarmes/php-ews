<?php
/**
 * Definition of the ArrayOfPermissionsType type
 *
 * @package php-ews
 * @subpackage Types
 */

namespace PhpEws\EWSType;

/**
 * Definition of the ArrayOfPermissionsType type
 */
class ArrayOfPermissionsType extends EWSType
{
    /**
     * Permission property
     *
     * @var EWSType_PermissionType
     */
    public $Permission;
}
