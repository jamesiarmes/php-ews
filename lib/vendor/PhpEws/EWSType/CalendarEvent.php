<?php
/**
 * Definition of the CalendarEvent type
 *
 * @package php-ews
 * @subpackage Types
 */

namespace \PhpEws\EWSType;

/**
 * Definition of the CalendarEvent type
 */
class CalendarEvent extends EWSType
{
    /**
     * Start date and time of the event in ISO 8601 format.
     *
     * @var string
     */
    public $Start;

    /**
     * End date and time of the event in ISO 8601 format.
     *
     * @var string
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
