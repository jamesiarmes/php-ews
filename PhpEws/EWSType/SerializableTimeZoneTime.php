<?php
/**
 * Definition of the SerializableTimeZoneTime type
 *
 * @package php-ews
 * @subpackage Types
 */

/**
 * Definition of the SerializableTimeZoneTime type
 */
class EWSType_SerializableTimeZoneTime extends EWSType
{
    /**
     * Bias property
     *
     * @var integer
     */
    public $Bias;

    /**
     * Time property
     *
     * @var string
     */
    public $Time;

    /**
     * DayOrder property
     *
     * @var integer
     */
    public $DayOrder;

    /**
     * Month property
     *
     * @var integer
     */
    public $Month;

    /**
     * DayOfWeek property
     *
     * @var EWSType_DayOfWeekType
     */
    public $DayOfWeek;

    /**
     * Year property
     *
     * @var string
     */
    public $Year;
}
