<?php

namespace jamesiarmes\PEWS\API\TypeTest;

/**
 * Class representing WeeklyRecurrencePatternType
 *
 *
 * XSD Type: WeeklyRecurrencePatternType
 *
 * @method WeeklyRecurrencePatternType getDaysOfWeek()
 * @method WeeklyRecurrencePatternType setDaysOfWeek($daysOfWeek)
 * @method WeeklyRecurrencePatternType getFirstDayOfWeek()
 * @method WeeklyRecurrencePatternType setFirstDayOfWeek($firstDayOfWeek)
 */
class WeeklyRecurrencePatternType extends IntervalRecurrencePatternBaseType
{

    /**
     * @property array $daysOfWeek
     */
    protected $daysOfWeek = null;

    /**
     * @property string $firstDayOfWeek
     */
    protected $firstDayOfWeek = null;


}

