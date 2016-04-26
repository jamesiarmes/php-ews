<?php

namespace jamesiarmes\PEWS\API\Type;

/**
 * Class representing AbsoluteYearlyRecurrencePatternType
 *
 *
 * XSD Type: AbsoluteYearlyRecurrencePatternType
 *
 * @method integer getDayOfMonth()
 * @method AbsoluteYearlyRecurrencePatternType setDayOfMonth(integer $dayOfMonth)
 * @method string getMonth()
 * @method AbsoluteYearlyRecurrencePatternType setMonth(string $month)
 */
class AbsoluteYearlyRecurrencePatternType extends RecurrencePatternBaseType
{

    /**
     * @var integer
     */
    protected $dayOfMonth = null;

    /**
     * @var string
     */
    protected $month = null;
}
