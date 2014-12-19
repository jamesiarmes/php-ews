<?php
/**
 * Contains EWSType_PhoneCallStateType.
 */

/**
 * Defines the current state for a phone call.
 *
 * @package php-ews\Enumerations
 */
class EWSType_PhoneCallStateType extends EWSType
{
    /**
     * The call is in alerting state (phone is ringing).
     *
     * @since Exchange 2010
     *
     * @var string
     */
    const ALERTED = 'Alerted';

    /**
     * The call is in the connected state.
     *
     * @since Exchange 2010
     *
     * @var string
     */
    const CONNECTED = 'Connected';

    /**
     * The system is dialing this call.
     *
     * @since Exchange 2010
     *
     * @var string
     */
    const CONNECTING = 'Connecting';

    /**
     * The call is disconnected.
     *
     * @since Exchange 2010
     *
     * @var string
     */
    const DISCONNECTED = 'Disconnected';

    /**
     * The call is being forwarded to another destination.
     *
     * @since Exchange 2010
     *
     * @var string
     */
    const FORWARDING = 'Forwarding';

    /**
     * Initial call state.
     *
     * @since Exchange 2010
     *
     * @var string
     */
    const IDLE = 'Idle';

    /**
     * The call is inbound.
     *
     * @since Exchange 2010
     *
     * @var string
     */
    const INCOMING = 'Incoming';

    /**
     * The call is being transferred to another destination.
     *
     * @since Exchange 2010
     *
     * @var string
     */
    const TRANSFERRING = 'Transferring';

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
