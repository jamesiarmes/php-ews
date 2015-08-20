<?php

namespace jamesiarmes\PEWS\API\Type;

use jamesiarmes\PEWS\API\Type;

/**
 * Class representing TaskRecurrenceType
 *
 *
 * XSD Type: TaskRecurrenceType
 *
 * @method TaskRecurrenceType getRelativeYearlyRecurrence()
 * @method TaskRecurrenceType setRelativeYearlyRecurrence(RelativeYearlyRecurrencePatternType $relativeYearlyRecurrence)
 * @method TaskRecurrenceType getAbsoluteYearlyRecurrence()
 * @method TaskRecurrenceType setAbsoluteYearlyRecurrence(AbsoluteYearlyRecurrencePatternType $absoluteYearlyRecurrence)
 * @method TaskRecurrenceType getRelativeMonthlyRecurrence()
 * @method TaskRecurrenceType setRelativeMonthlyRecurrence(RelativeMonthlyRecurrencePatternType $relativeMonthlyRecurrence)
 * @method TaskRecurrenceType getAbsoluteMonthlyRecurrence()
 * @method TaskRecurrenceType setAbsoluteMonthlyRecurrence(AbsoluteMonthlyRecurrencePatternType $absoluteMonthlyRecurrence)
 * @method TaskRecurrenceType getWeeklyRecurrence()
 * @method TaskRecurrenceType setWeeklyRecurrence(WeeklyRecurrencePatternType $weeklyRecurrence)
 * @method TaskRecurrenceType getDailyRecurrence()
 * @method TaskRecurrenceType setDailyRecurrence(DailyRecurrencePatternType $dailyRecurrence)
 * @method TaskRecurrenceType getDailyRegeneration()
 * @method TaskRecurrenceType setDailyRegeneration(DailyRegeneratingPatternType $dailyRegeneration)
 * @method TaskRecurrenceType getWeeklyRegeneration()
 * @method TaskRecurrenceType setWeeklyRegeneration(WeeklyRegeneratingPatternType $weeklyRegeneration)
 * @method TaskRecurrenceType getMonthlyRegeneration()
 * @method TaskRecurrenceType setMonthlyRegeneration(MonthlyRegeneratingPatternType $monthlyRegeneration)
 * @method TaskRecurrenceType getYearlyRegeneration()
 * @method TaskRecurrenceType setYearlyRegeneration(YearlyRegeneratingPatternType $yearlyRegeneration)
 * @method TaskRecurrenceType getNoEndRecurrence()
 * @method TaskRecurrenceType setNoEndRecurrence(NoEndRecurrenceRangeType $noEndRecurrence)
 * @method TaskRecurrenceType getEndDateRecurrence()
 * @method TaskRecurrenceType setEndDateRecurrence(EndDateRecurrenceRangeType $endDateRecurrence)
 * @method TaskRecurrenceType getNumberedRecurrence()
 * @method TaskRecurrenceType setNumberedRecurrence(NumberedRecurrenceRangeType $numberedRecurrence)
 */
class TaskRecurrenceType extends Type
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
     * @property \jamesiarmes\PEWS\API\Type\DailyRegeneratingPatternType
     * $dailyRegeneration
     */
    protected $dailyRegeneration = null;

    /**
     * @property \jamesiarmes\PEWS\API\Type\WeeklyRegeneratingPatternType
     * $weeklyRegeneration
     */
    protected $weeklyRegeneration = null;

    /**
     * @property \jamesiarmes\PEWS\API\Type\MonthlyRegeneratingPatternType
     * $monthlyRegeneration
     */
    protected $monthlyRegeneration = null;

    /**
     * @property \jamesiarmes\PEWS\API\Type\YearlyRegeneratingPatternType
     * $yearlyRegeneration
     */
    protected $yearlyRegeneration = null;

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
