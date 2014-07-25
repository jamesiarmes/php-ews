<?php

namespace PhpEws\DataType;

use PhpEws\DataType;

/**
 * Definition of the CalendarPermissionSetType type
 */
class CalendarPermissionSetType extends DataType
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
