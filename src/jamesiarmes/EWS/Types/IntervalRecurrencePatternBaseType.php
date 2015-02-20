<?php
/**
 * Contains IntervalRecurrencePatternBaseType.
 */

namespace jamesiarmes\EWS\Types;

use jamesiarmes\EWS\EWSType;

/**
 * Base class for recurrence patterns with an interval.
 *
 * @package jamesiarmes\EWS\Types
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
