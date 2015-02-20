<?php
/**
 * Contains SerializableTimeZone.
 */

namespace jamesiarmes\EWS\Types;

use jamesiarmes\EWS\EWSType;

/**
 * Defines a time zone.
 *
 * @package jamesiarmes\EWS\Types
 */
class SerializableTimeZone extends EWSType
{
    /**
     * Represents the general offset from Coordinated Universal Time (UTC).
     *
     * This value is in minutes.
     *
     * @since Exchange 2007
     *
     * @var integer
     */
    public $Bias;

    /**
     * Represents an offset from the time relative to UTC represented by the
     * Bias (UTC) element in regions where daylight saving time is observed.
     *
     * This element also contains information about when the transition to
     * daylight saving time from standard time occurs.
     *
     * @since Exchange 2007
     *
     * @var SerializableTimeZoneTime
     */
    public $DaylightTime;

    /**
     * Represents an offset from the time relative to UTC represented by the
     * Bias (UTC) element.
     *
     * This element also contains information about the transition to standard
     * time from daylight saving time in regions where daylight saving time is
     * observed.
     *
     * @since Exchange 2007
     *
     * @var SerializableTimeZoneTime
     */
    public $StandardTime;
}
