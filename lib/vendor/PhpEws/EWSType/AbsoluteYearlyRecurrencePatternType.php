<?php
/**
 * Definition of the AbsoluteYearlyRecurrencePatternType type
 *
 * @package php-ews
 * @subpackage Types
 */

namespace \PhpEws\EWSType;

/**
 * Definition of the AbsoluteYearlyRecurrencePatternType type
 */
class AbsoluteYearlyRecurrencePatternType extends EWSType
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
