<?php
/**
 * Contains \jamesiarmes\PEWS\Type\IntervalRecurrencePatternBaseType.
 */

namespace jamesiarmes\PEWS\Type;

/**
 * Base class for recurrence patterns with an interval.
 *
 * @package php-ews\Types
 */
abstract class IntervalRecurrencePatternBaseType extends RecurrencePatternBaseType
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
