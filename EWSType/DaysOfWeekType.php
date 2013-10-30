<?php
/**
 * Contains EWSType_DaysOfWeekType.
 */

/**
 * Represents days of the week that are used in item recurrence patterns.
 *
 * @package php-ews\Enumerations
 *
 * @todo Make this an array type that seperates values by space in the
 * __toString() method.
 */
class EWSType_DaysOfWeekType extends EWSType
{
    /**
     * Represents a day of the week.
     *
     * This value is not valid for a weekly recurrence pattern
     *
     * @since Exchange 2007
     *
     * @var string
     */
    const DAY = 'Day';

    /**
     * Represents Friday.
     *
     * @since Exchange 2007
     *
     * @var string
     */
    const FRIDAY = 'Friday';

    /**
     * Represents Monday.
     *
     * @since Exchange 2007
     *
     * @var string
     */
    const MONDAY = 'Monday';

    /**
     * Represents Saturday.
     *
     * @since Exchange 2007
     *
     * @var string
     */
    const SATURDAY = 'Saturday';

    /**
     * Represents Sunday.
     *
     * @since Exchange 2007
     *
     * @var string
     */
    const SUNDAY = 'Sunday';

    /**
     * Represents Thursday.
     *
     * @since Exchange 2007
     *
     * @var string
     */
    const THURSDAY = 'Thursday';

    /**
     * Represents Tuesday.
     *
     * @since Exchange 2007
     *
     * @var string
     */
    const TUESDAY = 'Tuesday';

    /**
     * Represents Wednesday.
     *
     * @since Exchange 2007
     *
     * @var string
     */
    const WEDNESDAY = 'Wednesday';

    /**
     * Represents a weekday.
     *
     * This value is not valid for a weekly recurrence pattern
     *
     * @since Exchange 2007
     *
     * @var string
     */
    const WEEKDAY = 'Weekday';

    /**
     * Represents a weekend day.
     *
     * This value is not valid for a weekly recurrence pattern
     *
     * @since Exchange 2007
     *
     * @var string
     */
    const WEEKENDDAY = 'WeekendDay';

    /**
     * Element value.
     *
     * For multiple values, seperate each value with a space.
     *
     * @var string
     */
    public $_;

    /**
     * Returns the value of this object as a string.
     *
     * @return string
     */
    public function __toString()
    {
        return $this->_;
    }
}
