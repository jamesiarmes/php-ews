<?php

namespace jamesiarmes\PEWS\API\Type;

/**
 * Class representing RelativeYearlyRecurrencePatternType
 *
 *
 * XSD Type: RelativeYearlyRecurrencePatternType
 *
 * @method RelativeYearlyRecurrencePatternType getDaysOfWeek()
 * @method RelativeYearlyRecurrencePatternType setDaysOfWeek(string $daysOfWeek)
 * @method RelativeYearlyRecurrencePatternType getDayOfWeekIndex()
 * @method RelativeYearlyRecurrencePatternType setDayOfWeekIndex(string $dayOfWeekIndex)
 * @method RelativeYearlyRecurrencePatternType getMonth()
 * @method RelativeYearlyRecurrencePatternType setMonth(string $month)
 */
class RelativeYearlyRecurrencePatternType extends RecurrencePatternBaseType
{

    /**
     * @property string $daysOfWeek
     */
    protected $daysOfWeek = null;

    /**
     * @property string $dayOfWeekIndex
     */
    protected $dayOfWeekIndex = null;

    /**
     * @property string $month
     */
    protected $month = null;


}

