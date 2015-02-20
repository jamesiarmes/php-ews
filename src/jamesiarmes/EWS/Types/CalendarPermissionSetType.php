<?php
/**
 * Contains CalendarPermissionSetType.
 */

namespace jamesiarmes\EWS\Types;

use jamesiarmes\EWS\EWSType;

/**
 * Contains all the permissions that are configured for a calendar folder.
 *
 * @package jamesiarmes\EWS\Types
 */
class CalendarPermissionSetType extends EWSType
{
    /**
     * Contains an array of calendar permissions for a folder.
     *
     * @since Exchange 2007 SP1
     *
     * @var ArrayOfCalendarPermissionsType
     */
    public $CalendarPermissions;

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
