<?php
/**
 * Definition of the SerializableTimeZone type
 *
 * @package php-ews
 * @subpackage Types
 */

/**
 * Definition of the SerializableTimeZone type
 */
class EWSType_SerializableTimeZone extends EWSType
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
