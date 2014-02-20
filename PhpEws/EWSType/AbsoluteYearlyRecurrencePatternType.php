<?php
/**
 * Definition of the AbsoluteYearlyRecurrencePatternType type
 *
 * @package php-ews
 * @subpackage Types
 */

/**
 * Definition of the AbsoluteYearlyRecurrencePatternType type
 */
class EWSType_AbsoluteYearlyRecurrencePatternType extends EWSType
{
    /**
     * DayOfMonth property
     *
     * @var integer
     */
    public $DayOfMonth;

    /**
     * Month property
     *
     * @var EWSType_MonthNamesType
     */
    public $Month;
}
