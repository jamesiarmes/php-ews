<?php

namespace PhpEws\DataType;

use PhpEws\DataType;

/**
 * Definition of the CalendarEventDetails type
 */
class CalendarEventDetails extends DataType
{
    /**
     * ID property
     *
     * @var string
     */
    public $ID;

    /**
     * Subject property
     *
     * @var string
     */
    public $Subject;

    /**
     * Location property
     *
     * @var string
     */
    public $Location;

    /**
     * IsMeeting property
     *
     * @var boolean
     */
    public $IsMeeting;

    /**
     * IsRecurring property
     *
     * @var boolean
     */
    public $IsRecurring;

    /**
     * IsException property
     *
     * @var boolean
     */
    public $IsException;

    /**
     * IsReminderSet property
     *
     * @var boolean
     */
    public $IsReminderSet;

    /**
     * IsPrivate property
     *
     * @var boolean
     */
    public $IsPrivate;
}
