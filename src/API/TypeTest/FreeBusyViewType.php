<?php

namespace jamesiarmes\PEWS\API\TypeTest;

use jamesiarmes\PEWS\API\TypeTest;

/**
 * Class representing FreeBusyViewType
 *
 *
 * XSD Type: FreeBusyView
 *
 * @method FreeBusyViewType getFreeBusyViewType()
 * @method FreeBusyViewType setFreeBusyViewType($freeBusyViewType)
 * @method FreeBusyViewType getMergedFreeBusy()
 * @method FreeBusyViewType setMergedFreeBusy($mergedFreeBusy)
 * @method FreeBusyViewType getCalendarEventArray()
 * @method FreeBusyViewType setCalendarEventArray($calendarEventArray)
 * @method FreeBusyViewType getWorkingHours()
 * @method FreeBusyViewType setWorkingHours($workingHours)
 */
class FreeBusyViewType extends TypeTest
{

    /**
     * @property array $freeBusyViewType
     */
    protected $freeBusyViewType = null;

    /**
     * @property string $mergedFreeBusy
     */
    protected $mergedFreeBusy = null;

    /**
     * @property array $calendarEventArray
     */
    protected $calendarEventArray = null;

    /**
     * @property \jamesiarmes\PEWS\API\TypeTest\WorkingHoursType $workingHours
     */
    protected $workingHours = null;


}

