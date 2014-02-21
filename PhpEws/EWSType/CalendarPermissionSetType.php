<?php
/**
 * Definition of the CalendarPermissionSetType type
 *
 * @package php-ews
* @subpackage Types
 */

namespace EWSType;

use PhpEws;
/**
 * Definition of the CalendarPermissionSetType type
 */
class CalendarPermissionSetType extends PhpEws\EWSType
{
    /**
     * CalendarPermissions property
     *
     * @var ArrayOfCalendarPermissionsType
     */
    public $CalendarPermissions;

    /**
     * UnknownEntries property
     *
     * @var ArrayOfUnknownEntriesType
     */
    public $UnknownEntries;
}
