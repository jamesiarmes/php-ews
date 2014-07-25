<?php

namespace PhpEws\DataType;

use PhpEws\DataType;

/**
 * Definition of the RecurrenceType type
 */
class RecurrenceType extends DataType
{
    /**
     * RelativeYearlyRecurrence property
     *
     * @var EWSType_RelativeYearlyRecurrencePatternType
     */
    public $RelativeYearlyRecurrence;

    /**
     * AbsoluteYearlyRecurrence property
     *
     * @var EWSType_AbsoluteYearlyRecurrencePatternType
     */
    public $AbsoluteYearlyRecurrence;

    /**
     * RelativeMonthlyRecurrence property
     *
     * @var EWSType_RelativeMonthlyRecurrencePatternType
     */
    public $RelativeMonthlyRecurrence;

    /**
     * AbsoluteMonthlyRecurrence property
     *
     * @var EWSType_AbsoluteMonthlyRecurrencePatternType
     */
    public $AbsoluteMonthlyRecurrence;

    /**
     * WeeklyRecurrence property
     *
     * @var EWSType_WeeklyRecurrencePatternType
     */
    public $WeeklyRecurrence;

    /**
     * DailyRecurrence property
     *
     * @var EWSType_DailyRecurrencePatternType
     */
    public $DailyRecurrence;

    /**
     * NoEndRecurrence property
     *
     * @var EWSType_NoEndRecurrenceRangeType
     */
    public $NoEndRecurrence;

    /**
     * EndDateRecurrence property
     *
     * @var EWSType_EndDateRecurrenceRangeType
     */
    public $EndDateRecurrence;

    /**
     * NumberedRecurrence property
     *
     * @var EWSType_NumberedRecurrenceRangeType
     */
    public $NumberedRecurrence;
}
