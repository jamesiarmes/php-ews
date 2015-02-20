<?php
/**
 * Contains ArrayOfCalendarPermissionsType.
 */

namespace jamesiarmes\EWS\Types;

use jamesiarmes\EWS\EWSType;

/**
 * Represents an array of calendar permissions for a folder.
 *
 * @package jamesiarmes\EWS\Types
 */
class ArrayOfCalendarPermissionsType extends EWSType
{
    /**
     * Defines the access that a delegate user has to a calendar folder.
     *
     * @since Exchange 2007 SP1
     *
     * @var CalendarPermissionType
     */
    public $CalendarPermission;
}
