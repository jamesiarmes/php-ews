<?php

namespace jamesiarmes\PEWS\API\Type;

/**
 * Class representing RelativeMonthlyRecurrencePatternType
 *
 *
 * XSD Type: RelativeMonthlyRecurrencePatternType
 *
 * @method string getDaysOfWeek()
 * @method RelativeMonthlyRecurrencePatternType setDaysOfWeek(string $daysOfWeek)
 * @method string getDayOfWeekIndex()
 * @method RelativeMonthlyRecurrencePatternType setDayOfWeekIndex(string $dayOfWeekIndex)
 */
class RelativeMonthlyRecurrencePatternType extends IntervalRecurrencePatternBaseType
{

    /**
     * @var string
     */
    protected $daysOfWeek = null;

    /**
     * @var string
     */
    protected $dayOfWeekIndex = null;
}
