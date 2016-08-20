<?php
/**
 * Contains \jamesiarmes\PhpEws\Type\TimeChangeType.
 */

namespace jamesiarmes\PhpEws\Type;

use \jamesiarmes\PhpEws\Type;

/**
 * Represents the date and time when a time change occurs.
 *
 * @package php-ews\Type
 */
class TimeChangeType extends Type
{
    /**
     * Represents the date when the time changes from standard time or daylight
     * saving time.
     *
     * @since Exchange 2007
     *
     * @var string
     *
     * @todo Make a Date object that extends DateTime.
     */
    public $AbsoluteDate;

    /**
     * Describes the offset from the BaseOffset.
     *
     * Together with the BaseOffset element, the Offset element identifies
     * whether the time is standard time or daylight saving time.
     *
     * @since Exchange 2007
     *
     * @var integer
     */
    public $Offset;

    /**
     * Describes a relative yearly recurrence pattern for a time zone transition
     * date.
     *
     * @since Exchange 2007
     *
     * @var \jamesiarmes\PhpEws\Type\RelativeYearlyRecurrencePatternType
     */
    public $RelativeYearlyRecurrence;

    /**
     * Describes the time when the time changes between standard time and
     * daylight saving time.
     *
     * @since Exchange 2007
     *
     * @var string
     *
     * @todo Make a Time object that extends DateTime.
     */
    public $Time;

    /**
     * Name of the time zone.
     *
     * @since Exchange 2007
     *
     * @var string
     */
    public $TimeZoneName;
}
