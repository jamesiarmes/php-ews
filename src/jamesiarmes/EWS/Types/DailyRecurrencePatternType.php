<?php
/**
 * Contains DailyRecurrencePatternType.
 */

namespace jamesiarmes\EWS\Types;

use jamesiarmes\EWS\EWSType;

/**
 * Describes the frequency, in days, in which a calendar item or a task recurs.
 *
 * @package jamesiarmes\EWS\Types
 *
 * @todo Extend IntervalRecurrencePatternBaseType.
 */
class DailyRecurrencePatternType extends EWSType
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
