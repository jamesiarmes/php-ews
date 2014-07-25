<?php

namespace PhpEws\DataType;

use PhpEws\DataType;

/**
 * Definition of the FreeBusyView type
 */
class FreeBusyView extends DataType
{
    /**
     * FreeBusyViewType property
     *
     * @var FreeBusyViewType
     */
    public $FreeBusyViewType;

    /**
     * MergedFreeBusy property
     *
     * @var string
     */
    public $MergedFreeBusy;

    /**
     * CalendarEventArray property
     *
     * @var ArrayOfCalendarEvent
     */
    public $CalendarEventArray;

    /**
     * WorkingHours property
     *
     * @var WorkingHours
     */
    public $WorkingHours;
}
