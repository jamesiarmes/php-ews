<?php
/**
 * Contains \jamesiarmes\PhpEws\Type\SerializableTimeZoneTime.
 */

namespace jamesiarmes\PhpEws\Type;

use \jamesiarmes\PhpEws\Type;

/**
 * Represents an offset from the time relative to Coordinated Universal Time
 * (UTC) that is represented by the Bias (UTC) element in regions where daylight
 * saving time is observed.
 *
 * This class also contains information about when the transition to daylight
 * saving time from standard time occurs.
 *
 * @package php-ews\Type
 */
class SerializableTimeZoneTime extends Type
{
    /**
     * Represents the offset from the UTC offset that is identified by the Bias
     * (UTC) element for standard time and daylight saving time.
     *
     * This value is in minutes.
     *
     * @since Exchange 2007
     *
     * @var integer
     */
    public $Bias;

    /**
     * Represents the day of the week when the transition to and from standard
     * time and daylight saving time occurs.
     *
     * @since Exchange 2007
     *
     * @var string
     *
     * @see \jamesiarmes\PhpEws\Enumeration\DayOfWeekType
     */
    public $DayOfWeek;

    /**
     * Represents the nth occurrence of the day that is specified in the
     * DayOfWeek element that represents the date of transition from and to
     * standard time and daylight saving time.
     *
     * The maximum value for this element can be either 4 or 5, depending on the
     * month and year.
     *
     * @since Exchange 2007
     *
     * @var integer
     */
    public $DayOrder;

    /**
     * Represents the transition month of the year to and from standard time and
     * daylight saving time.
     *
     * The value represents the ordinal rank of the month by occurrence and must
     * be a number between 1 and 12
     *
     * @since Exchange 2007
     *
     * @var integer
     */
    public $Month;

    /**
     * Represents the transition time of day to and from standard time and
     * daylight saving time.
     *
     * @since Exchange 2007
     *
     * @var string
     *
     * @todo Create a Time class that extends DateTime.
     */
    public $Time;

    /**
     * Used to define a time zone that changes depending on the year.
     *
     * The year format is YYYY.
     *
     * This element is optional.
     *
     * @since Exchange 2007 SP1
     *
     * @var string
     */
    public $Year;
}
