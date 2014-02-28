<?php
/**
 * Definition of the WorkingPeriod type
 *
 * @package php-ews
* @subpackage Types
 */

namespace EWSType;

use PhpEws;
/**
 * Definition of the WorkingPeriod type
 */
class WorkingPeriod extends PhpEws\EWSType
{
    /**
     * DayOfWeek property
     *
     * @var DaysOfWeekType
     */
    public $DayOfWeek;

    /**
     * StartTimeInMinutes property
     *
     * @var integer
     */
    public $StartTimeInMinutes;

    /**
     * EndTimeInMinutes property
     *
     * @var integer
     */
    public $EndTimeInMinutes;
}
