<?php
/**
 * Contains EWSType_FreeBusyView.
 */

/**
 * Represents availability information for a specific user.
 *
 * @package php-ews\Types
 */
class EWSType_FreeBusyView extends EWSType
{
    /**
     * Contains a set of unique calendar item occurrences that represent the
     * requested user's availability.
     *
     * @since Exchange 2007
     *
     * @var EWSType_ArrayOfCalendarEvent
     */
    public $CalendarEventArray;

    /**
     * Represents the type of requested free/busy information returned in the
     * response.
     *
     * @since Exchange 2007
     *
     * @var EWSType_FreeBusyViewType
     */
    public $FreeBusyViewType;

    /**
     * Contains the merged free/busy stream of data.
     *
     * @since Exchange 2007
     *
     * @var string
     */
    public $MergedFreeBusy;

    /**
     * Represents the time zone settings and working hours for the requested
     * mailbox user.
     *
     * @since Exchange 2007
     *
     * @var EWSType_WorkingHours
     */
    public $WorkingHours;
}
