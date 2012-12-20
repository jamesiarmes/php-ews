<?php
/**
 * Definition of the CalendarPermissionSetType type
 *
 * @package php-ews
 * @subpackage Types
 */

namespace \PhpEws\EWSType;

/**
 * Definition of the CalendarPermissionSetType type
 */
class CalendarPermissionSetType extends EWSType
{
    /**
     * CalendarPermissions property
     *
     * @var EWSType_ArrayOfCalendarPermissionsType
     */
    public $CalendarPermissions;

    /**
     * UnknownEntries property
     *
     * @var EWSType_ArrayOfUnknownEntriesType
     */
    public $UnknownEntries;
}
