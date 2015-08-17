<?php

namespace jamesiarmes\PEWS\API\TypeTest;

use jamesiarmes\PEWS\API\TypeTest;

/**
 * Class representing CalendarPermissionSetType
 *
 * The set of permissions on a folder
 * XSD Type: CalendarPermissionSetType
 *
 * @method CalendarPermissionSetType getCalendarPermissions()
 * @method CalendarPermissionSetType setCalendarPermissions($calendarPermissions)
 * @method CalendarPermissionSetType getUnknownEntries()
 * @method CalendarPermissionSetType setUnknownEntries($unknownEntries)
 */
class CalendarPermissionSetType extends TypeTest
{

    /**
     * @property array $calendarPermissions
     */
    protected $calendarPermissions = null;

    /**
     * @property array $unknownEntries
     */
    protected $unknownEntries = null;


}

