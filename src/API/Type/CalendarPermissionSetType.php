<?php

namespace jamesiarmes\PEWS\API\Type;

use jamesiarmes\PEWS\API\Type;

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
class CalendarPermissionSetType extends Type
{

    /**
     * @property \jamesiarmes\PEWS\API\Type\CalendarPermissionType[]
     * $calendarPermissions
     */
    protected $calendarPermissions = null;

    /**
     * @property string[] $unknownEntries
     */
    protected $unknownEntries = null;


}

