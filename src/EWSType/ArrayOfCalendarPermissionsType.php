<?php
/**
 * Contains EWSType_ArrayOfCalendarPermissionsType.
 */

/**
 * Represents an array of calendar permissions for a folder.
 *
 * @package php-ews\Types
 */
class EWSType_ArrayOfCalendarPermissionsType extends EWSType
{
    /**
     * Defines the access that a delegate user has to a calendar folder.
     *
     * @since Exchange 2007 SP1
     *
     * @var EWSType_CalendarPermissionType
     */
    public $CalendarPermission;
}
