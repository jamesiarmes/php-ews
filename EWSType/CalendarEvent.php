<?php
/**
 * Definition of the CalendarEvent type
 *
 * @package php-ews
 * @subpackage Types
 */

/**
 * Definition of the CalendarEvent type
 */
class EWSType_CalendarEvent extends EWSType
{
    /**
     * Start date and time of the event in ISO 8601 format.
     *
     * @var string
     *
     * @todo Make a DateTime object.
     */
    public $Start;

    /**
     * End date and time of the event in ISO 8601 format.
     *
     * @var string
     *
     * @todo Make a DateTime object.
     */
    public $End;

    /**
     * BusyType property
     *
     * @var EWSType_LegacyFreeBusyType
     */
    public $BusyType;

    /**
     * CalendarEventDetails property
     *
     * @var EWSType_CalendarEventDetails
     */
    public $CalendarEventDetails;
}
