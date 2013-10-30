<?php
/**
 * Contains EWSType_DailyRecurrencePatternType.
 */

/**
 * Describes the frequency, in days, in which a calendar item or a task recurs.
 *
 * @package php-ews\Types
 */
class EWSType_DailyRecurrencePatternType extends EWSType
{
    /**
     * Defines the interval, in days, between two consecutive recurring items.
     *
     * The value must be in the range from 1 to 999.
     *
     * @since Exchange 2007
     *
     * @var integer
     */
    public $Interval;
}
