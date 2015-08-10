<?php

namespace jamesiarmes\PEWS\API\TypeTest;

use jamesiarmes\PEWS\API\Type;

/**
 * Class representing RecurrenceType
 *
 *
 * XSD Type: RecurrenceType
 *
 * @method RecurrenceType getRelativeYearlyRecurrence()
 * @method RecurrenceType setRelativeYearlyRecurrence($relativeYearlyRecurrence)
 * @method RecurrenceType getAbsoluteYearlyRecurrence()
 * @method RecurrenceType setAbsoluteYearlyRecurrence($absoluteYearlyRecurrence)
 * @method RecurrenceType getRelativeMonthlyRecurrence()
 * @method RecurrenceType setRelativeMonthlyRecurrence($relativeMonthlyRecurrence)
 * @method RecurrenceType getAbsoluteMonthlyRecurrence()
 * @method RecurrenceType setAbsoluteMonthlyRecurrence($absoluteMonthlyRecurrence)
 * @method RecurrenceType getWeeklyRecurrence()
 * @method RecurrenceType setWeeklyRecurrence($weeklyRecurrence)
 * @method RecurrenceType getDailyRecurrence()
 * @method RecurrenceType setDailyRecurrence($dailyRecurrence)
 * @method RecurrenceType getNoEndRecurrence()
 * @method RecurrenceType setNoEndRecurrence($noEndRecurrence)
 * @method RecurrenceType getEndDateRecurrence()
 * @method RecurrenceType setEndDateRecurrence($endDateRecurrence)
 * @method RecurrenceType getNumberedRecurrence()
 * @method RecurrenceType setNumberedRecurrence($numberedRecurrence)
 */
class RecurrenceType extends Type
{

    /**
     * @property \jamesiarmes\PEWS\API\TypeTest\RelativeYearlyRecurrencePatternType
     * $relativeYearlyRecurrence
     */
    protected $relativeYearlyRecurrence = null;

    /**
     * @property \jamesiarmes\PEWS\API\TypeTest\AbsoluteYearlyRecurrencePatternType
     * $absoluteYearlyRecurrence
     */
    protected $absoluteYearlyRecurrence = null;

    /**
     * @property \jamesiarmes\PEWS\API\TypeTest\RelativeMonthlyRecurrencePatternType
     * $relativeMonthlyRecurrence
     */
    protected $relativeMonthlyRecurrence = null;

    /**
     * @property \jamesiarmes\PEWS\API\TypeTest\AbsoluteMonthlyRecurrencePatternType
     * $absoluteMonthlyRecurrence
     */
    protected $absoluteMonthlyRecurrence = null;

    /**
     * @property \jamesiarmes\PEWS\API\TypeTest\WeeklyRecurrencePatternType
     * $weeklyRecurrence
     */
    protected $weeklyRecurrence = null;

    /**
     * @property \jamesiarmes\PEWS\API\TypeTest\DailyRecurrencePatternType
     * $dailyRecurrence
     */
    protected $dailyRecurrence = null;

    /**
     * @property \jamesiarmes\PEWS\API\TypeTest\NoEndRecurrenceRangeType
     * $noEndRecurrence
     */
    protected $noEndRecurrence = null;

    /**
     * @property \jamesiarmes\PEWS\API\TypeTest\EndDateRecurrenceRangeType
     * $endDateRecurrence
     */
    protected $endDateRecurrence = null;

    /**
     * @property \jamesiarmes\PEWS\API\TypeTest\NumberedRecurrenceRangeType
     * $numberedRecurrence
     */
    protected $numberedRecurrence = null;


}

