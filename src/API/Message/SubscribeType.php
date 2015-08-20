<?php

namespace jamesiarmes\PEWS\API\Message;

/**
 * Class representing SubscribeType
 *
 *
 * XSD Type: SubscribeType
 *
 * @method SubscribeType getPullSubscriptionRequest()
 * @method SubscribeType setPullSubscriptionRequest(\jamesiarmes\PEWS\API\Type\PullSubscriptionRequestType $pullSubscriptionRequest)
 * @method SubscribeType getPushSubscriptionRequest()
 * @method SubscribeType setPushSubscriptionRequest(\jamesiarmes\PEWS\API\Type\PushSubscriptionRequestType $pushSubscriptionRequest)
 * @method SubscribeType getStreamingSubscriptionRequest()
 * @method SubscribeType setStreamingSubscriptionRequest(\jamesiarmes\PEWS\API\Type\StreamingSubscriptionRequestType $streamingSubscriptionRequest)
 */
class SubscribeType extends BaseRequestType
{

    /**
     * @property \jamesiarmes\PEWS\API\Type\PullSubscriptionRequestType
     * $pullSubscriptionRequest
     */
    protected $pullSubscriptionRequest = null;

    /**
     * @property \jamesiarmes\PEWS\API\Type\PushSubscriptionRequestType
     * $pushSubscriptionRequest
     */
    protected $pushSubscriptionRequest = null;

    /**
     * @property \jamesiarmes\PEWS\API\Type\StreamingSubscriptionRequestType
     * $streamingSubscriptionRequest
     */
    protected $streamingSubscriptionRequest = null;
}
