<?php
/**
 * Definition of the CalendarEventDetails type
 *
 * @package php-ews
 * @subpackage Types
 */

/**
 * Definition of the CalendarEventDetails type
 */
class EWSType_CalendarEventDetails extends EWSType
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
