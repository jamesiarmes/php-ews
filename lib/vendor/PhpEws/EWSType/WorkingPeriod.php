<?php
/**
 * Definition of the WorkingPeriod type
 *
 * @package php-ews
 * @subpackage Types
 */

namespace \PhpEws\EWSType;

/**
 * Definition of the WorkingPeriod type
 */
class WorkingPeriod extends EWSType
{
    /**
     * DayOfWeek property
     *
     * @var EWSType_DaysOfWeekType
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
