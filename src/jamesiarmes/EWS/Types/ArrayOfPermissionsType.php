<?php
/**
 * Contains ArrayOfPermissionsType.
 */

namespace jamesiarmes\EWS\Types;

use jamesiarmes\EWS\EWSType;

/**
 * Contains the collection of permissions for a folder.
 *
 * @package jamesiarmes\EWS\Types
 */
class ArrayOfPermissionsType extends EWSType
{
    /**
     * Defines the access that a delegate has to a folder.
     *
     * @since Exchange 2007 SP1
     *
     * @var PermissionType
     */
    public $Permission;
}
