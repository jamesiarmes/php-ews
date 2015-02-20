<?php
/**
 * Contains SubscribeType.
 */

namespace jamesiarmes\EWS\Types;

use jamesiarmes\EWS\EWSType;

/**
 * Defines the properties used to create subscriptions.
 *
 * @package jamesiarmes\EWS\Types
 *
 * @todo Extend BaseRequestType.
 */
class SubscribeType extends EWSType
{
    /**
     * Represents a subscription to a pull-based event notification.
     *
     * @since Exchange 2007
     *
     * @var PullSubscriptionRequestType
     */
    public $PullSubscriptionRequest;

    /**
     * Represents a subscription to a push-based event notification.
     *
     * @since Exchange 2007
     *
     * @var PushSubscriptionRequestType
     */
    public $PushSubscriptionRequest;

    /**
     * Represents a subscription to a streaming event notification.
     *
     * @since Exchange 2010 SP1
     *
     * @var StreamingSubscriptionRequest
     */
    public $StreamingSubscriptionRequest;
}
