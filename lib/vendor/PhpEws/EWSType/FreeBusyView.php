<?php
/**
 * Definition of the FreeBusyView type
 *
 * @package php-ews
 * @subpackage Types
 */

namespace PhpEws\EWSType;

/**
 * Definition of the FreeBusyView type
 */
class FreeBusyView extends EWSType
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
