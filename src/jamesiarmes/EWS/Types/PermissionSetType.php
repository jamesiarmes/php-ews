<?php
/**
 * Contains PermissionSetType.
 */

namespace jamesiarmes\EWS\Types;

use jamesiarmes\EWS\EWSType;

/**
 * Contains all the permissions that are configured for a folder.
 *
 * @package jamesiarmes\EWS\Types
 */
class PermissionSetType extends EWSType
{
    /**
     * Contains the collection of permissions for a folder.
     *
     * @since Exchange 2007 SP1
     *
     * @var ArrayOfPermissionsType
     */
    public $Permissions;

    /**
     * Contains an array of unknown entries that cannot be resolved against the
     * Active Directory directory service.
     *
     * @since Exchange 2007 SP1
     *
     * @var ArrayOfUnknownEntriesType
     */
    public $UnknownEntries;
}
