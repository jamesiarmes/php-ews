<?php

namespace jamesiarmes\PEWS\API\Type;

use jamesiarmes\PEWS\API\Type;

/**
 * Class representing TaskRecurrenceType
 *
 *
 * XSD Type: TaskRecurrenceType
 *
 * @method RelativeYearlyRecurrencePatternType getRelativeYearlyRecurrence()
 * @method TaskRecurrenceType setRelativeYearlyRecurrence(RelativeYearlyRecurrencePatternType $relativeYearlyRecurrence)
 * @method AbsoluteYearlyRecurrencePatternType getAbsoluteYearlyRecurrence()
 * @method TaskRecurrenceType setAbsoluteYearlyRecurrence(AbsoluteYearlyRecurrencePatternType $absoluteYearlyRecurrence)
 * @method RelativeMonthlyRecurrencePatternType getRelativeMonthlyRecurrence()
 * @method TaskRecurrenceType setRelativeMonthlyRecurrence(RelativeMonthlyRecurrencePatternType $relativeMonthlyRecurrence)
 * @method AbsoluteMonthlyRecurrencePatternType getAbsoluteMonthlyRecurrence()
 * @method TaskRecurrenceType setAbsoluteMonthlyRecurrence(AbsoluteMonthlyRecurrencePatternType $absoluteMonthlyRecurrence)
 * @method WeeklyRecurrencePatternType getWeeklyRecurrence()
 * @method TaskRecurrenceType setWeeklyRecurrence(WeeklyRecurrencePatternType $weeklyRecurrence)
 * @method DailyRecurrencePatternType getDailyRecurrence()
 * @method TaskRecurrenceType setDailyRecurrence(DailyRecurrencePatternType $dailyRecurrence)
 * @method DailyRegeneratingPatternType getDailyRegeneration()
 * @method TaskRecurrenceType setDailyRegeneration(DailyRegeneratingPatternType $dailyRegeneration)
 * @method WeeklyRegeneratingPatternType getWeeklyRegeneration()
 * @method TaskRecurrenceType setWeeklyRegeneration(WeeklyRegeneratingPatternType $weeklyRegeneration)
 * @method MonthlyRegeneratingPatternType getMonthlyRegeneration()
 * @method TaskRecurrenceType setMonthlyRegeneration(MonthlyRegeneratingPatternType $monthlyRegeneration)
 * @method YearlyRegeneratingPatternType getYearlyRegeneration()
 * @method TaskRecurrenceType setYearlyRegeneration(YearlyRegeneratingPatternType $yearlyRegeneration)
 * @method NoEndRecurrenceRangeType getNoEndRecurrence()
 * @method TaskRecurrenceType setNoEndRecurrence(NoEndRecurrenceRangeType $noEndRecurrence)
 * @method EndDateRecurrenceRangeType getEndDateRecurrence()
 * @method TaskRecurrenceType setEndDateRecurrence(EndDateRecurrenceRangeType $endDateRecurrence)
 * @method NumberedRecurrenceRangeType getNumberedRecurrence()
 * @method TaskRecurrenceType setNumberedRecurrence(NumberedRecurrenceRangeType $numberedRecurrence)
 */
class TaskRecurrenceType extends Type
{

    /**
     * @var \jamesiarmes\PEWS\API\Type\RelativeYearlyRecurrencePatternType
     */
    protected $relativeYearlyRecurrence = null;

    /**
     * @var \jamesiarmes\PEWS\API\Type\AbsoluteYearlyRecurrencePatternType
     */
    protected $absoluteYearlyRecurrence = null;

    /**
     * @var \jamesiarmes\PEWS\API\Type\RelativeMonthlyRecurrencePatternType
     */
    protected $relativeMonthlyRecurrence = null;

    /**
     * @var \jamesiarmes\PEWS\API\Type\AbsoluteMonthlyRecurrencePatternType
     */
    protected $absoluteMonthlyRecurrence = null;

    /**
     * @var \jamesiarmes\PEWS\API\Type\WeeklyRecurrencePatternType
     */
    protected $weeklyRecurrence = null;

    /**
     * @var \jamesiarmes\PEWS\API\Type\DailyRecurrencePatternType
     */
    protected $dailyRecurrence = null;

    /**
     * @var \jamesiarmes\PEWS\API\Type\DailyRegeneratingPatternType
     */
    protected $dailyRegeneration = null;

    /**
     * @var \jamesiarmes\PEWS\API\Type\WeeklyRegeneratingPatternType
     */
    protected $weeklyRegeneration = null;

    /**
     * @var \jamesiarmes\PEWS\API\Type\MonthlyRegeneratingPatternType
     */
    protected $monthlyRegeneration = null;

    /**
     * @var \jamesiarmes\PEWS\API\Type\YearlyRegeneratingPatternType
     */
    protected $yearlyRegeneration = null;

    /**
     * @var \jamesiarmes\PEWS\API\Type\NoEndRecurrenceRangeType
     */
    protected $noEndRecurrence = null;

    /**
     * @var \jamesiarmes\PEWS\API\Type\EndDateRecurrenceRangeType
     */
    protected $endDateRecurrence = null;

    /**
     * @var \jamesiarmes\PEWS\API\Type\NumberedRecurrenceRangeType
     */
    protected $numberedRecurrence = null;
}
