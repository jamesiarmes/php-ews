<?php

namespace jamesiarmes\PEWS\API\Type;

/**
 * Class representing AbsoluteYearlyRecurrencePatternType
 *
 *
 * XSD Type: AbsoluteYearlyRecurrencePatternType
 *
 * @method AbsoluteYearlyRecurrencePatternType getDayOfMonth()
 * @method AbsoluteYearlyRecurrencePatternType setDayOfMonth(integer $dayOfMonth)
 * @method AbsoluteYearlyRecurrencePatternType getMonth()
 * @method AbsoluteYearlyRecurrencePatternType setMonth(string $month)
 */
class AbsoluteYearlyRecurrencePatternType extends RecurrencePatternBaseType
{

    /**
     * @property integer $dayOfMonth
     */
    protected $dayOfMonth = null;

    /**
     * @property string $month
     */
    protected $month = null;
}
