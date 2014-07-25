<?php

namespace PhpEws\DataType;

use PhpEws\DataType;

/**
 * Definition of the SerializableTimeZoneTime type
 */
class SerializableTimeZoneTime extends DataType
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
     * @var DayOfWeekType
     */
    public $DayOfWeek;

    /**
     * Year property
     *
     * @var string
     */
    public $Year;
}
