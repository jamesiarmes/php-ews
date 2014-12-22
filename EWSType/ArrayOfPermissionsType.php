<?php
/**
 * Contains EWSType_ArrayOfPermissionsType.
 */

/**
 * Contains the collection of permissions for a folder.
 *
 * @package php-ews\Types
 */
class EWSType_ArrayOfPermissionsType extends EWSType
{
    /**
     * Defines the access that a delegate has to a folder.
     *
     * @since Exchange 2007 SP1
     *
     * @var EWSType_PermissionType
     */
    public $Permission;
}
