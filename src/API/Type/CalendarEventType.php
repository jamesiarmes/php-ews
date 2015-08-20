<?php

namespace jamesiarmes\PEWS\API\Type;

use jamesiarmes\PEWS\API\Type;

/**
 * Class representing CalendarEventType
 *
 *
 * XSD Type: CalendarEvent
 *
 * @method CalendarEventType getStartTime()
 * @method CalendarEventType setStartTime(\DateTime $startTime)
 * @method CalendarEventType getEndTime()
 * @method CalendarEventType setEndTime(\DateTime $endTime)
 * @method CalendarEventType getBusyType()
 * @method CalendarEventType setBusyType(string $busyType)
 * @method CalendarEventType getCalendarEventDetails()
 * @method CalendarEventType setCalendarEventDetails(CalendarEventDetailsType $calendarEventDetails)
 */
class CalendarEventType extends Type
{

    /**
     * @property \DateTime $startTime
     */
    protected $startTime = null;

    protected $_typeMap = array(
        'startTime' => 'dateTime',
        'endTime' => 'dateTime',
    );

    /**
     * @property \DateTime $endTime
     */
    protected $endTime = null;

    /**
     * @property string $busyType
     */
    protected $busyType = null;

    /**
     * @property \jamesiarmes\PEWS\API\Type\CalendarEventDetailsType
     * $calendarEventDetails
     */
    protected $calendarEventDetails = null;
}
