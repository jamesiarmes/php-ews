<?php
/**
 * Contains \jamesiarmes\PhpEws\Type\IntervalRecurrencePatternBaseType.
 */

namespace jamesiarmes\PhpEws\Type;

/**
 * Base class for recurrence patterns with an interval.
 *
 * @package php-ews\Type
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
