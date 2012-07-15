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

    /**
     * Constructor
     */
    public function __construct()
    {
        $this->schema = array(
            array(
                'name' => 'Bias',
                'required' => false,
                'type' => 'integer',
            ),
            array(
                'name' => 'Time',
                'required' => false,
                'type' => 'string',
            ),
            array(
                'name' => 'DayOrder',
                'required' => false,
                'type' => 'integer',
            ),
            array(
                'name' => 'Month',
                'required' => false,
                'type' => 'integer',
            ),
            array(
                'name' => 'DayOfWeek',
                'required' => false,
                'type' => 'DayOfWeekType',
            ),
            array(
                'name' => 'Year',
                'required' => false,
                'type' => 'string',
            ),
        );
    }
}
