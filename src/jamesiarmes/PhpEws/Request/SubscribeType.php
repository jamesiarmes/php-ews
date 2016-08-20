<?php
/**
 * Contains \jamesiarmes\PhpEws\Request\SubscribeType.
 */

namespace jamesiarmes\PhpEws\Request;

/**
 * Defines the properties used to create subscriptions.
 *
 * @package php-ews\Request
 */
class SubscribeType extends BaseRequestType
{
    /**
     * Represents a subscription to a pull-based event notification.
     *
     * @since Exchange 2007
     *
     * @var \jamesiarmes\PhpEws\Type\PullSubscriptionRequestType
     */
    public $PullSubscriptionRequest;

    /**
     * Represents a subscription to a push-based event notification.
     *
     * @since Exchange 2007
     *
     * @var \jamesiarmes\PhpEws\Type\PushSubscriptionRequestType
     */
    public $PushSubscriptionRequest;

    /**
     * Represents a subscription to a streaming event notification.
     *
     * @since Exchange 2010 SP1
     *
     * @var \jamesiarmes\PhpEws\Type\StreamingSubscriptionRequest
     */
    public $StreamingSubscriptionRequest;
}
