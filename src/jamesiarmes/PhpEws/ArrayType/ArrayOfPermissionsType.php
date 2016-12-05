<?php
/**
 * Contains \jamesiarmes\PhpEws\ArrayType\ArrayOfPermissionsType.
 */

namespace jamesiarmes\PhpEws\ArrayType;

use \jamesiarmes\PhpEws\ArrayType;

/**
 * Contains the collection of permissions for a folder.
 *
 * @package php-ews\Array
 */
class ArrayOfPermissionsType extends ArrayType
{
    /**
     * Defines the access that a delegate has to a folder.
     *
     * @since Exchange 2007 SP1
     *
     * @var \jamesiarmes\PhpEws\Type\PermissionType[]
     */
    public $Permission = array();
}
