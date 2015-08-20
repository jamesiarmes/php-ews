<?php

namespace jamesiarmes\PEWS\API\Type;

use jamesiarmes\PEWS\API\Type;

/**
 * Class representing FreeBusyViewType
 *
 *
 * XSD Type: FreeBusyView
 *
 * @method FreeBusyViewType getFreeBusyViewType()
 * @method FreeBusyViewType setFreeBusyViewType(array $freeBusyViewType)
 * @method FreeBusyViewType getMergedFreeBusy()
 * @method FreeBusyViewType setMergedFreeBusy(string $mergedFreeBusy)
 * @method FreeBusyViewType getCalendarEventArray()
 * @method FreeBusyViewType setCalendarEventArray(array $calendarEventArray)
 * @method FreeBusyViewType getWorkingHours()
 * @method FreeBusyViewType setWorkingHours(WorkingHoursType $workingHours)
 */
class FreeBusyViewType extends Type
{

    /**
     * @property string[] $freeBusyViewType
     */
    protected $freeBusyViewType = null;

    /**
     * @property string $mergedFreeBusy
     */
    protected $mergedFreeBusy = null;

    /**
     * @property \jamesiarmes\PEWS\API\Type\CalendarEventType[] $calendarEventArray
     */
    protected $calendarEventArray = null;

    /**
     * @property \jamesiarmes\PEWS\API\Type\WorkingHoursType $workingHours
     */
    protected $workingHours = null;


}

