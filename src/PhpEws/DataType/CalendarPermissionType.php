<?php

namespace PhpEws\DataType;

use PhpEws\DataType;

/**
 * Definition of the CalendarPermissionType type
 */
class CalendarPermissionType extends DataType
{
    /**
     * ReadItems property
     *
     * @var CalendarPermissionReadAccessType
     */
    public $ReadItems;

    /**
     * CalendarPermissionLevel property
     *
     * @var CalendarPermissionLevelType
     */
    public $CalendarPermissionLevel;
}
