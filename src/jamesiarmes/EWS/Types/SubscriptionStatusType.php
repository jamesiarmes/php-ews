<?php
/**
 * Contains SubscriptionStatusType.
 */

namespace jamesiarmes\EWS\Types;

use jamesiarmes\EWS\EWSType;

/**
 * Describes the status of a push subscription.
 *
 * @package jamesiarmes\EWS\Enumerations
 */
class SubscriptionStatusType extends EWSType
{
    /**
     * Indicates that the notification has been received and the subscription is
     * to continue.
     *
     * @since Exchange 2007
     *
     * @var string
     */
    const OK = 'OK';

    /**
     * Indicates that push notifications from the subscription should be ceased.
     *
     * @since Exchange 2007
     *
     * @var string
     */
    const UNSUBSCRIBE = 'Unsubscribe';

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
