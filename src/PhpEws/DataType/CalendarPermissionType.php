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
     * @var EWSType_CalendarPermissionReadAccessType
     */
    public $ReadItems;

    /**
     * CalendarPermissionLevel property
     *
     * @var EWSType_CalendarPermissionLevelType
     */
    public $CalendarPermissionLevel;
}
