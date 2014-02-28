<?php
/**
 * Definition of the RelativeYearlyRecurrencePatternType type
 *
 * @package php-ews
* @subpackage Types
 */

namespace EWSType;

use PhpEws;
/**
 * Definition of the RelativeYearlyRecurrencePatternType type
 */
class RelativeYearlyRecurrencePatternType extends PhpEws\EWSType
{
    /**
     * DaysOfWeek property
     *
     * @var DayOfWeekType
     */
    public $DaysOfWeek;

    /**
     * DayOfWeekIndex property
     *
     * @var DayOfWeekIndexType
     */
    public $DayOfWeekIndex;

    /**
     * Month property
     *
     * @var MonthNamesType
     */
    public $Month;
}
