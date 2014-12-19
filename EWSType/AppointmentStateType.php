<?php
/**
 * Contains EWS_AppointmentStateType.
 */

/**
 * Specifies the status of the appointment.
 *
 * @package php-ews\Enumerations
 */
class EWS_AppointmentStateType extends EWSType
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

    /**
     * Element value.
     *
     * @var string
     */
    public $_;

    /**
     * Returns the value of this object as a string.
     *
     * @return string
     */
    public function __toString()
    {
        return $this->_;
    }
}
