<?php
/**
 * Contains EWSType_TaskRecurrenceType.
 */

/**
 * Defines the recurrence pattern for recurring tasks.
 *
 * @package php-ews\Types
 *
 * @todo Extend EWSType_RecurrenceType.
 */
class EWSType_TaskRecurrenceType extends EWSType
{
    /**
     * Represents a monthly recurrence pattern.
     *
     * @since Exchange 2007
     *
     * @var EWSType_AbsoluteMonthlyRecurrencePatternType
     */
    public $AbsoluteMonthlyRecurrence;

    /**
     * Represents a yearly recurrence pattern.
     *
     * @since Exchange 2007
     *
     * @var EWSType_AbsoluteYearlyRecurrencePatternType
     */
    public $AbsoluteYearlyRecurrence;

    /**
     * Describes the frequency, in days, in which a calendar item or task
     * recurs.
     *
     * @since Exchange 2007
     *
     * @var EWSType_DailyRecurrencePatternType
     */
    public $DailyRecurrence;

    /**
     * Describes how many days after the completion of the current task the next
     * occurrence will be due.
     *
     * @since Exchange 2007
     *
     * @var EWSType_DailyRegeneratingPatternType
     */
    public $DailyRegeneration;

    /**
     * Describes the start date and the end date of an item recurrence pattern.
     *
     * The use of this element excludes the use of the NoEndRecurrence and
     * NumberedRecurrence elements.
     *
     * @since Exchange 2007
     *
     * @var EWSType_EndDateRecurrenceRangeType
     */
    public $EndDateRecurrence;

    /**
     * Describes how many months after the completion of the current task the
     * next occurrence will be due.
     *
     * @since Exchange 2007
     *
     * @var EWSType_MonthlyRegeneratingPatternType
     */
    public $MonthlyRegeneration;

    /**
     * Describes a recurrence pattern that does not have a defined end date.
     *
     * The use of this element excludes the use of the EndDateRecurrence and
     * NumberedRecurrence elements.
     *
     * @since Exchange 2007
     *
     * @var EWSType_NoEndRecurrenceRangeType
     */
    public $NoEndRecurrence;

    /**
     * Describes the start date and the number of occurrences of a recurring
     * item.
     *
     * The use of this element excludes the use of the NoEndRecurrence and
     * EndDateRecurrence elements.
     *
     * @since Exchange 2007
     *
     * @var EWSType_NumberedRecurrenceRangeType
     */
    public $NumberedRecurrence;

    /**
     * Describes a relative monthly recurrence pattern for a recurring calendar
     * item.
     *
     * @since Exchange 2007
     *
     * @var EWSType_RelativeMonthlyRecurrencePatternType
     */
    public $RelativeMonthlyRecurrence;

    /**
     * Describes a relative yearly recurrence pattern.
     *
     * @since Exchange 2007
     *
     * @var EWSType_RelativeYearlyRecurrencePatternType
     */
    public $RelativeYearlyRecurrence;

    /**
     * Describes the frequency, in weeks, and the days that a calendar item or
     * task recurs.
     *
     * @since Exchange 2007
     *
     * @var EWSType_WeeklyRecurrencePatternType
     */
    public $WeeklyRecurrence;

    /**
     * Describes how many weeks after the completion of the current task the
     * next occurrence will be due.
     *
     * @since Exchange 2007
     *
     * @var EWSType_WeeklyRegeneratingPatternType
     */
    public $WeeklyRegeneration;

    /**
     * Describes how many years after the completion of the current task the
     * next occurrence will be due.
     *
     * @since Exchange 2007
     *
     * @var EWSType_YearlyRegeneratingPatternType
     */
    public $YearlyRegeneration;
}
