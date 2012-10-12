<?php
/**
 * Definition of the WorkingPeriod type
 *
 * @package php-ews
 * @subpackage Types
 */

/**
 * Definition of the WorkingPeriod type
 */
class EWSType_WorkingPeriod extends EWSType
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
