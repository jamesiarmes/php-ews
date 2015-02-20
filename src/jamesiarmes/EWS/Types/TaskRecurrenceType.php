<?php
/**
 * Contains TaskRecurrenceType.
 */

namespace jamesiarmes\EWS\Types;

use jamesiarmes\EWS\EWSType;

/**
 * Defines the recurrence pattern for recurring tasks.
 *
 * @package jamesiarmes\EWS\Types
 *
 * @todo Extend RecurrenceType.
 */
class TaskRecurrenceType extends EWSType
{
    /**
     * Represents a monthly recurrence pattern.
     *
     * @since Exchange 2007
     *
     * @var AbsoluteMonthlyRecurrencePatternType
     */
    public $AbsoluteMonthlyRecurrence;

    /**
     * Represents a yearly recurrence pattern.
     *
     * @since Exchange 2007
     *
     * @var AbsoluteYearlyRecurrencePatternType
     */
    public $AbsoluteYearlyRecurrence;

    /**
     * Describes the frequency, in days, in which a calendar item or task
     * recurs.
     *
     * @since Exchange 2007
     *
     * @var DailyRecurrencePatternType
     */
    public $DailyRecurrence;

    /**
     * Describes how many days after the completion of the current task the next
     * occurrence will be due.
     *
     * @since Exchange 2007
     *
     * @var DailyRegeneratingPatternType
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
     * @var EndDateRecurrenceRangeType
     */
    public $EndDateRecurrence;

    /**
     * Describes how many months after the completion of the current task the
     * next occurrence will be due.
     *
     * @since Exchange 2007
     *
     * @var MonthlyRegeneratingPatternType
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
     * @var NoEndRecurrenceRangeType
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
     * @var NumberedRecurrenceRangeType
     */
    public $NumberedRecurrence;

    /**
     * Describes a relative monthly recurrence pattern for a recurring calendar
     * item.
     *
     * @since Exchange 2007
     *
     * @var RelativeMonthlyRecurrencePatternType
     */
    public $RelativeMonthlyRecurrence;

    /**
     * Describes a relative yearly recurrence pattern.
     *
     * @since Exchange 2007
     *
     * @var RelativeYearlyRecurrencePatternType
     */
    public $RelativeYearlyRecurrence;

    /**
     * Describes the frequency, in weeks, and the days that a calendar item or
     * task recurs.
     *
     * @since Exchange 2007
     *
     * @var WeeklyRecurrencePatternType
     */
    public $WeeklyRecurrence;

    /**
     * Describes how many weeks after the completion of the current task the
     * next occurrence will be due.
     *
     * @since Exchange 2007
     *
     * @var WeeklyRegeneratingPatternType
     */
    public $WeeklyRegeneration;

    /**
     * Describes how many years after the completion of the current task the
     * next occurrence will be due.
     *
     * @since Exchange 2007
     *
     * @var YearlyRegeneratingPatternType
     */
    public $YearlyRegeneration;
}
