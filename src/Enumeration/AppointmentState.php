<?php
/**
 * Contains \jamesiarmes\PhpEws\Enumeration\AppointmentState.
 */

namespace jamesiarmes\PhpEws\Enumeration;

use \jamesiarmes\PhpEws\Enumeration;

/**
 * Specifies the status of the appointment.
 *
 * @package php-ews\Enumeration
 */
class AppointmentState extends Enumeration
{
    /**
     * This appointment has been canceled.
     *
     * @since Exchange 2007
     *
     * @var string
     */
    const CANCELED = 4;

    /**
     * This appointment was forwarded.
     *
     * @since Exchange 2007
     *
     * @var string
     */
    const FORWARD = 8;

    /**
     * This appointment is a meeting.
     *
     * @since Exchange 2007
     *
     * @var string
     */
    const MEETING = 1;

    /**
     * No flags have been set.
     *
     * This is only used for an appointment that does not include attendees.
     *
     * @since Exchange 2007
     *
     * @var string
     */
    const NONE = 0;

    /**
     * This appointment has been received.
     *
     * @since Exchange 2007
     *
     * @var string
     */
    const RECEIVED = 2;
}
