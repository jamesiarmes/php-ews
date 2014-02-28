<?php
/**
 * Definition of the AbsoluteYearlyRecurrencePatternType type
 *
 * @package php-ews
* @subpackage Types
 */

namespace EWSType;

use PhpEws;
/**
 * Definition of the AbsoluteYearlyRecurrencePatternType type
 */
class AbsoluteYearlyRecurrencePatternType extends PhpEws\EWSType
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
     * @var MonthNamesType
     */
    public $Month;
}
