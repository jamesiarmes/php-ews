<?php

namespace PhpEws\DataType;

use PhpEws\DataType;

/**
 * Definition of the SerializableTimeZone type
 */
class SerializableTimeZone extends DataType
{
    /**
     * Bias property
     *
     * @var integer
     */
    public $Bias;

    /**
     * StandardTime property
     *
     * @var SerializableTimeZoneTime
     */
    public $StandardTime;

    /**
     * DaylightTime property
     *
     * @var SerializableTimeZoneTime
     */
    public $DaylightTime;
}
