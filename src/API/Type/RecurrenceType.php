<?php

namespace jamesiarmes\PEWS\API\Type;

use jamesiarmes\PEWS\API\Type;

/**
 * Class representing RecurrenceType
 *
 *
 * XSD Type: RecurrenceType
 *
 * @method RecurrenceType getRelativeYearlyRecurrence()
 * @method RecurrenceType setRelativeYearlyRecurrence(RelativeYearlyRecurrencePatternType $relativeYearlyRecurrence)
 * @method RecurrenceType getAbsoluteYearlyRecurrence()
 * @method RecurrenceType setAbsoluteYearlyRecurrence(AbsoluteYearlyRecurrencePatternType $absoluteYearlyRecurrence)
 * @method RecurrenceType getRelativeMonthlyRecurrence()
 * @method RecurrenceType setRelativeMonthlyRecurrence(RelativeMonthlyRecurrencePatternType $relativeMonthlyRecurrence)
 * @method RecurrenceType getAbsoluteMonthlyRecurrence()
 * @method RecurrenceType setAbsoluteMonthlyRecurrence(AbsoluteMonthlyRecurrencePatternType $absoluteMonthlyRecurrence)
 * @method RecurrenceType getWeeklyRecurrence()
 * @method RecurrenceType setWeeklyRecurrence(WeeklyRecurrencePatternType $weeklyRecurrence)
 * @method RecurrenceType getDailyRecurrence()
 * @method RecurrenceType setDailyRecurrence(DailyRecurrencePatternType $dailyRecurrence)
 * @method RecurrenceType getNoEndRecurrence()
 * @method RecurrenceType setNoEndRecurrence(NoEndRecurrenceRangeType $noEndRecurrence)
 * @method RecurrenceType getEndDateRecurrence()
 * @method RecurrenceType setEndDateRecurrence(EndDateRecurrenceRangeType $endDateRecurrence)
 * @method RecurrenceType getNumberedRecurrence()
 * @method RecurrenceType setNumberedRecurrence(NumberedRecurrenceRangeType $numberedRecurrence)
 */
class RecurrenceType extends Type
{

    /**
     * @property \jamesiarmes\PEWS\API\Type\RelativeYearlyRecurrencePatternType
     * $relativeYearlyRecurrence
     */
    protected $relativeYearlyRecurrence = null;

    /**
     * @property \jamesiarmes\PEWS\API\Type\AbsoluteYearlyRecurrencePatternType
     * $absoluteYearlyRecurrence
     */
    protected $absoluteYearlyRecurrence = null;

    /**
     * @property \jamesiarmes\PEWS\API\Type\RelativeMonthlyRecurrencePatternType
     * $relativeMonthlyRecurrence
     */
    protected $relativeMonthlyRecurrence = null;

    /**
     * @property \jamesiarmes\PEWS\API\Type\AbsoluteMonthlyRecurrencePatternType
     * $absoluteMonthlyRecurrence
     */
    protected $absoluteMonthlyRecurrence = null;

    /**
     * @property \jamesiarmes\PEWS\API\Type\WeeklyRecurrencePatternType
     * $weeklyRecurrence
     */
    protected $weeklyRecurrence = null;

    /**
     * @property \jamesiarmes\PEWS\API\Type\DailyRecurrencePatternType $dailyRecurrence
     */
    protected $dailyRecurrence = null;

    /**
     * @property \jamesiarmes\PEWS\API\Type\NoEndRecurrenceRangeType $noEndRecurrence
     */
    protected $noEndRecurrence = null;

    /**
     * @property \jamesiarmes\PEWS\API\Type\EndDateRecurrenceRangeType
     * $endDateRecurrence
     */
    protected $endDateRecurrence = null;

    /**
     * @property \jamesiarmes\PEWS\API\Type\NumberedRecurrenceRangeType
     * $numberedRecurrence
     */
    protected $numberedRecurrence = null;


}

