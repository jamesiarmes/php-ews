<?php

namespace jamesiarmes\PEWS\API\Type;

use jamesiarmes\PEWS\API\Type;

/**
 * Class representing CalendarPermissionSetType
 *
 * The set of permissions on a folder
 * XSD Type: CalendarPermissionSetType
 *
 * @method CalendarPermissionSetType addCalendarPermissions(CalendarPermissionType $calendarPermissions)
 * @method CalendarPermissionType[] getCalendarPermissions()
 * @method CalendarPermissionSetType setCalendarPermissions(array $calendarPermissions)
 * @method CalendarPermissionSetType addUnknownEntries(string $unknownEntries)
 * @method string[] getUnknownEntries()
 * @method CalendarPermissionSetType setUnknownEntries(array $unknownEntries)
 */
class CalendarPermissionSetType extends Type
{

    /**
     * @var \jamesiarmes\PEWS\API\Type\CalendarPermissionType[]
     */
    protected $calendarPermissions = null;

    /**
     * @var string[]
     */
    protected $unknownEntries = null;
}
