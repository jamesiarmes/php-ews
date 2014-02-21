<?php
/**
 * Definition of the ArrayOfPermissionsType type
 *
 * @package php-ews
* @subpackage Types
 */

namespace EWSType;

use PhpEws;
/**
 * Definition of the ArrayOfPermissionsType type
 */
class ArrayOfPermissionsType extends PhpEws\EWSType
{
    /**
     * Permission property
     *
     * @var PermissionType
     */
    public $Permission;
}
