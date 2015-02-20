<?php
/**
 * Contains FreeBusyView.
 */

namespace jamesiarmes\EWS\Types;

use jamesiarmes\EWS\EWSType;

/**
 * Represents availability information for a specific user.
 *
 * @package jamesiarmes\EWS\Types
 */
class FreeBusyView extends EWSType
{
    /**
     * Contains a set of unique calendar item occurrences that represent the
     * requested user's availability.
     *
     * @since Exchange 2007
     *
     * @var ArrayOfCalendarEvent
     */
    public $CalendarEventArray;

    /**
     * Represents the type of requested free/busy information returned in the
     * response.
     *
     * @since Exchange 2007
     *
     * @var FreeBusyViewType
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
     * @var WorkingHours
     */
    public $WorkingHours;
}
