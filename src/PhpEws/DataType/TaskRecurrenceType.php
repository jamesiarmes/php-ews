<?php

namespace PhpEws\DataType;

use PhpEws\DataType;

/**
 * Definition of the TaskRecurrenceType type
 */
class TaskRecurrenceType extends DataType
{
    /**
     * RelativeYearlyRecurrence property
     *
     * @var RelativeYearlyRecurrencePatternType
     */
    public $RelativeYearlyRecurrence;

    /**
     * AbsoluteYearlyRecurrence property
     *
     * @var AbsoluteYearlyRecurrencePatternType
     */
    public $AbsoluteYearlyRecurrence;

    /**
     * RelativeMonthlyRecurrence property
     *
     * @var RelativeMonthlyRecurrencePatternType
     */
    public $RelativeMonthlyRecurrence;

    /**
     * AbsoluteMonthlyRecurrence property
     *
     * @var AbsoluteMonthlyRecurrencePatternType
     */
    public $AbsoluteMonthlyRecurrence;

    /**
     * WeeklyRecurrence property
     *
     * @var WeeklyRecurrencePatternType
     */
    public $WeeklyRecurrence;

    /**
     * DailyRecurrence property
     *
     * @var DailyRecurrencePatternType
     */
    public $DailyRecurrence;

    /**
     * DailyRegeneration property
     *
     * @var DailyRegeneratingPatternType
     */
    public $DailyRegeneration;

    /**
     * WeeklyRegeneration property
     *
     * @var WeeklyRegeneratingPatternType
     */
    public $WeeklyRegeneration;

    /**
     * MonthlyRegeneration property
     *
     * @var MonthlyRegeneratingPatternType
     */
    public $MonthlyRegeneration;

    /**
     * YearlyRegeneration property
     *
     * @var YearlyRegeneratingPatternType
     */
    public $YearlyRegeneration;

    /**
     * NoEndRecurrence property
     *
     * @var NoEndRecurrenceRangeType
     */
    public $NoEndRecurrence;

    /**
     * EndDateRecurrence property
     *
     * @var EndDateRecurrenceRangeType
     */
    public $EndDateRecurrence;

    /**
     * NumberedRecurrence property
     *
     * @var NumberedRecurrenceRangeType
     */
    public $NumberedRecurrence;
}
