<?php
/**
 * Contains \jamesiarmes\PhpEws\Type\TimeZoneType.
 */

namespace jamesiarmes\PhpEws\Type;

use \jamesiarmes\PhpEws\Type;

/**
 * Represents a time zone.
 *
 * @package php-ews\Type
 */
class TimeZoneType extends Type
{
    /**
     * Represents the hourly offset from UTC for the current time zone.
     *
     * @since Exchange 2007
     *
     * @var integer
     */
    public $BaseOffset;

    /**
     * Represents the date and time when the time changes from standard time to
     * daylight saving time.
     *
     * @since Exchange 2007
     *
     * @var \jamesiarmes\PhpEws\Type\TimeChangeType
     */
    public $Daylight;

    /**
     * Represents the date and time when the time changes from daylight saving
     * time to standard time.
     *
     * @since Exchange 2007
     *
     * @var \jamesiarmes\PhpEws\Type\TimeChangeType
     */
    public $Standard;

    /**
     * The name of the time zone.
     *
     * @since Exchange 2007
     *
     * @var string
     */
    public $TimeZoneName;
}
