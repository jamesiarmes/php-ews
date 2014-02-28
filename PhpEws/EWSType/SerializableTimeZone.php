<?php
/**
 * Definition of the SerializableTimeZone type
 *
 * @package php-ews
* @subpackage Types
 */

namespace EWSType;

use PhpEws;
/**
 * Definition of the SerializableTimeZone type
 */
class SerializableTimeZone extends PhpEws\EWSType
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
