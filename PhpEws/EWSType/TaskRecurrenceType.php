<?php
/**
 * Definition of the TaskRecurrenceType type
 *
 * @package php-ews
 * @subpackage Types
 */

/**
 * Definition of the TaskRecurrenceType type
 */
class EWSType_TaskRecurrenceType extends EWSType
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
     * DailyRegeneration property
     *
     * @var EWSType_DailyRegeneratingPatternType
     */
    public $DailyRegeneration;

    /**
     * WeeklyRegeneration property
     *
     * @var EWSType_WeeklyRegeneratingPatternType
     */
    public $WeeklyRegeneration;

    /**
     * MonthlyRegeneration property
     *
     * @var EWSType_MonthlyRegeneratingPatternType
     */
    public $MonthlyRegeneration;

    /**
     * YearlyRegeneration property
     *
     * @var EWSType_YearlyRegeneratingPatternType
     */
    public $YearlyRegeneration;

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
