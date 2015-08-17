<?php

namespace jamesiarmes\PEWS\API\TypeTest;

use jamesiarmes\PEWS\API\TypeTest;

/**
 * Class representing CalendarEventType
 *
 *
 * XSD Type: CalendarEvent
 *
 * @method CalendarEventType getStartTime()
 * @method CalendarEventType setStartTime($startTime)
 * @method CalendarEventType getEndTime()
 * @method CalendarEventType setEndTime($endTime)
 * @method CalendarEventType getBusyType()
 * @method CalendarEventType setBusyType($busyType)
 * @method CalendarEventType getCalendarEventDetails()
 * @method CalendarEventType setCalendarEventDetails($calendarEventDetails)
 */
class CalendarEventType extends TypeTest
{

    /**
     * @property \DateTime $startTime
     */
    protected $startTime = null;

    /**
     * @property \DateTime $endTime
     */
    protected $endTime = null;

    /**
     * @property string $busyType
     */
    protected $busyType = null;

    /**
     * @property \jamesiarmes\PEWS\API\TypeTest\CalendarEventDetailsType
     * $calendarEventDetails
     */
    protected $calendarEventDetails = null;


}

