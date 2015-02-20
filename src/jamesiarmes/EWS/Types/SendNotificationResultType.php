<?php
/**
 * Contains SendNotificationResultType.
 */

namespace jamesiarmes\EWS\Types;

use jamesiarmes\EWS\EWSType;

/**
 * Defines the response of a client application to a push notification.
 *
 * @package jamesiarmes\EWS\Types
 */
class SendNotificationResultType extends EWSType
{
    /**
     * Describes the status of a push subscription.
     *
     * @since Exchange 2007
     *
     * @var SubscriptionStatusType
     */
    public $SubscriptionStatus;
}
