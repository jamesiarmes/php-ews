<?php
/**
 * Contains \jamesiarmes\PhpEws\Type\SerializableTimeZone.
 */

namespace jamesiarmes\PhpEws\Type;

use \jamesiarmes\PhpEws\Type;

/**
 * Defines a time zone.
 *
 * @package php-ews\Type
 */
class SerializableTimeZone extends Type
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
     * @var \jamesiarmes\PhpEws\Type\SerializableTimeZoneTime
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
     * @var \jamesiarmes\PhpEws\Type\SerializableTimeZoneTime
     */
    public $StandardTime;
}
