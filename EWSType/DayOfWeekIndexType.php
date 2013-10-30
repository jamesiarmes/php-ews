<?php
/**
 * Contains EWSType_DayOfWeekIndexType.
 */

/**
 * Defines the type of a calendar item.
 *
 * @package php-ews\Enumerations
 */
class EWSType_DayOfWeekIndexType extends EWSType
{
    /**
     * Represents the first day of a week.
     *
     * @since Exchange 2007
     *
     * @var string
     */
    const FIRST = 'First';

    /**
     * Represents the fourth day of a week.
     *
     * @since Exchange 2007
     *
     * @var string
     */
    const FOURTH = 'Fourth';

    /**
     * Represents the last day of a week.
     *
     * @since Exchange 2007
     *
     * @var string
     */
    const LAST = 'Last';

    /**
     * Represents the second day of a week.
     *
     * @since Exchange 2007
     *
     * @var string
     */
    const SECOND = 'Second';

    /**
     * Represents the Third day of a week.
     *
     * @since Exchange 2007
     *
     * @var string
     */
    const THIRD = 'Third';

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
