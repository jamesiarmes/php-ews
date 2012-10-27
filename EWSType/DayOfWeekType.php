<?php
/**
 * Contains EWSType_DayOfWeekType.
 */

/**
 * Represents a day of the week.
 *
 * @package php-ews\Enumerations
 */
class EWSType_DayOfWeekType extends EWSType
{
    /**
     * Represents a day of the week.
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
     * @since Exchange 2007
     *
     * @var string
     */
    const WEEKDAY = 'Weekday';

    /**
     * Represents a weekend day.
     *
     * @since Exchange 2007
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
