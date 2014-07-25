<?php

namespace PhpEws\DataType;

use PhpEws\DataType;
/**
 * Definition of the FreeBusyView type
 *
 * @package php-ews
 * @subpackage Types
 */

/**
 * Definition of the FreeBusyView type
 */
class FreeBusyView extends DataType
{
    /**
     * FreeBusyViewType property
     *
     * @var EWSType_FreeBusyViewType
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
     * @var EWSType_ArrayOfCalendarEvent
     */
    public $CalendarEventArray;

    /**
     * WorkingHours property
     *
     * @var EWSType_WorkingHours
     */
    public $WorkingHours;
}
