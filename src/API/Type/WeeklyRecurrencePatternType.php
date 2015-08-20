<?php

namespace jamesiarmes\PEWS\API\Type;

/**
 * Class representing WeeklyRecurrencePatternType
 *
 *
 * XSD Type: WeeklyRecurrencePatternType
 *
 * @method WeeklyRecurrencePatternType addDaysOfWeek(string $daysOfWeek)
 * @method string[] getDaysOfWeek()
 * @method WeeklyRecurrencePatternType setDaysOfWeek(array $daysOfWeek)
 * @method string getFirstDayOfWeek()
 * @method WeeklyRecurrencePatternType setFirstDayOfWeek(string $firstDayOfWeek)
 */
class WeeklyRecurrencePatternType extends IntervalRecurrencePatternBaseType
{

    /**
     * @var string[]
     */
    protected $daysOfWeek = null;

    /**
     * @var string
     */
    protected $firstDayOfWeek = null;
}
