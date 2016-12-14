<?php
/**
 * Contains \jamesiarmes\PhpEws\Type\FreeBusyView.
 */

namespace jamesiarmes\PhpEws\Type;

use \jamesiarmes\PhpEws\Type;

/**
 * Represents availability information for a specific user.
 *
 * @package php-ews\Type
 */
class FreeBusyView extends Type
{
    /**
     * Contains a set of unique calendar item occurrences that represent the
     * requested user's availability.
     *
     * @since Exchange 2007
     *
     * @var \jamesiarmes\PhpEws\ArrayType\ArrayOfCalendarEvent
     */
    public $CalendarEventArray;

    /**
     * Represents the type of requested free/busy information returned in the
     * response.
     *
     * @since Exchange 2007
     *
     * @var string
     *
     * @see \jamesiarmes\PhpEws\Enumeration\FreeBusyViewType
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
     * @var \jamesiarmes\PhpEws\Type\WorkingHours
     */
    public $WorkingHours;
}
