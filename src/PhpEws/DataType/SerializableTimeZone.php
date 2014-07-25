<?php

namespace PhpEws\DataType;

use PhpEws\DataType;
/**
 * Definition of the SerializableTimeZone type
 *
 * @package php-ews
 * @subpackage Types
 */

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
     * @var EWSType_SerializableTimeZoneTime
     */
    public $StandardTime;

    /**
     * DaylightTime property
     *
     * @var EWSType_SerializableTimeZoneTime
     */
    public $DaylightTime;
}
