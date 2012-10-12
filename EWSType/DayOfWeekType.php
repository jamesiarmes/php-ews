<?php
/**
 * Represents a day of the week,
 *
 * @package php-ews
 * @subpackage Types
 */

/**
 * Definition of the DayOfWeekType type.
 */
class EWSType_DayOfWeekType extends EWSType
{
    /**
     * Represents Sunday.
     *
     * @var string
     */
    const SUNDAY = 'Sunday';

    /**
     * Represents Monday.
     *
     * @var string
     */
    const MONDAY = 'Monday';

    /**
     * Represents Tuesday.
     *
     * @var string
     */
    const TUESDAY = 'Tuesday';

    /**
     * Represents Wednesday.
     *
     * @var string
     */
    const WEDNESDAY = 'Wednesday';

    /**
     * Represents Thursday.
     *
     * @var string
     */
    const THURSDAY = 'Thursday';

    /**
     * Represents Friday.
     *
     * @var string
     */
    const FRIDAY = 'Friday';

    /**
     * Represents Saturday.
     *
     * @var string
     */
    const SATURDAY = 'Saturday';

    /**
     * Represents a day of the week.
     *
     * @var string
     */
    const DAY = 'Day';

    /**
     * Represents a weekday.
     *
     * @var string
     */
    const WEEKDAY = 'Weekday';

    /**
     * Represents a weekend day.
     *
     * @var string
     */
    const WEEKENDDAY = 'WeekendDay';

    /**
     * Element value.
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
