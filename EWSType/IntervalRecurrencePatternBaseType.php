<?php
/**
 * Contains EWSType_IntervalRecurrencePatternBaseType.
 */

/**
 * Base class for recurrence patterns with an interval.
 *
 * @package php-ews\Types
 */
abstract class EWSType_IntervalRecurrencePatternBaseType extends EWSType_RecurrencePatternBaseType
{
    /**
     * Defines the interval between two consecutive recurring pattern items.
     *
     * @since Exchange 2007
     *
     * @var integer
     */
    public $Interval;
}
