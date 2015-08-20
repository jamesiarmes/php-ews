<?php

namespace jamesiarmes\PEWS\API\Type;

/**
 * Class representing WeeklyRecurrencePatternType
 *
 *
 * XSD Type: WeeklyRecurrencePatternType
 *
 * @method WeeklyRecurrencePatternType getDaysOfWeek()
 * @method WeeklyRecurrencePatternType setDaysOfWeek(array $daysOfWeek)
 * @method WeeklyRecurrencePatternType getFirstDayOfWeek()
 * @method WeeklyRecurrencePatternType setFirstDayOfWeek(string $firstDayOfWeek)
 */
class WeeklyRecurrencePatternType extends IntervalRecurrencePatternBaseType
{

    /**
     * @property string[] $daysOfWeek
     */
    protected $daysOfWeek = null;

    /**
     * @property string $firstDayOfWeek
     */
    protected $firstDayOfWeek = null;
}
