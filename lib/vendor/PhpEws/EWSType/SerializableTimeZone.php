<?php
/**
 * Definition of the SerializableTimeZone type
 *
 * @package php-ews
 * @subpackage Types
 */

namespace \PhpEws\EWSType;

/**
 * Definition of the SerializableTimeZone type
 */
class SerializableTimeZone extends EWSType
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
