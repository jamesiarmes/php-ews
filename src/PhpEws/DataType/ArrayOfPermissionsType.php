<?php

namespace PhpEws\DataType;

use PhpEws\DataType;
/**
 * Definition of the ArrayOfPermissionsType type
 *
 * @package php-ews
 * @subpackage Types
 */

/**
 * Definition of the ArrayOfPermissionsType type
 */
class ArrayOfPermissionsType extends DataType
{
    /**
     * Permission property
     *
     * @var EWSType_PermissionType
     */
    public $Permission;
}
