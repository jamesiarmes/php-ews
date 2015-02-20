<?php
/**
 * Contains MessageTrackingDeliveryStatusType.
 */

namespace jamesiarmes\EWS\Types;

use jamesiarmes\EWS\EWSType;

/**
 * Defines the status for a message.
 *
 * @package jamesiarmes\EWS\Enumerations
 */
class MessageTrackingDeliveryStatusType extends EWSType
{
    /**
     * Specifies that the message was delivered to all of the specified
     * recipients.
     *
     * @since Exchange 2010
     *
     * @var string
     */
    const DELIVERED = 'Delivered';

    /**
     * Specifies that the message is waiting for approval from a moderator.
     *
     * @since Exchange 2010
     *
     * @var string
     */
    const PENDING = 'Pending';

    /**
     * Specifies that the message was delivered and read by the recipients.
     *
     * @since Exchange 2010
     *
     * @var string
     */
    const READ = 'Read';

    /**
     * Specifies that the message was transferred to a server outside the search
     * scope.
     *
     * @since Exchange 2010
     *
     * @var string
     */
    const TRANSFERRED = 'Transferred';

    /**
     * Specifies that a message was not delivered.
     *
     * @since Exchange 2010
     *
     * @var string
     */
    const UNSUCCESSFUL = 'Unsuccessful';

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
