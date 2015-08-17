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
 * @method CalendarPermissionSetType setCalendarPermissions(array $calendarPermissions)
 * @method CalendarPermissionSetType getUnknownEntries()
 * @method CalendarPermissionSetType setUnknownEntries(array $unknownEntries)
 */
class CalendarPermissionSetType extends TypeTest
{

    /**
     * @property \jamesiarmes\PEWS\API\TypeTest\CalendarPermissionType[]
     * $calendarPermissions
     */
    protected $calendarPermissions = null;

    /**
     * @property string[] $unknownEntries
     */
    protected $unknownEntries = null;


}

