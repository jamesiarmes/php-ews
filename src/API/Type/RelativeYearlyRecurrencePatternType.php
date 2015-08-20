<?php

namespace jamesiarmes\PEWS\API\Type;

/**
 * Class representing RelativeYearlyRecurrencePatternType
 *
 *
 * XSD Type: RelativeYearlyRecurrencePatternType
 *
 * @method string getDaysOfWeek()
 * @method RelativeYearlyRecurrencePatternType setDaysOfWeek(string $daysOfWeek)
 * @method string getDayOfWeekIndex()
 * @method RelativeYearlyRecurrencePatternType setDayOfWeekIndex(string $dayOfWeekIndex)
 * @method string getMonth()
 * @method RelativeYearlyRecurrencePatternType setMonth(string $month)
 */
class RelativeYearlyRecurrencePatternType extends RecurrencePatternBaseType
{

    /**
     * @var string
     */
    protected $daysOfWeek = null;

    /**
     * @var string
     */
    protected $dayOfWeekIndex = null;

    /**
     * @var string
     */
    protected $month = null;
}
