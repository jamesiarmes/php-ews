<?php

namespace jamesiarmes\PEWS\API\Message;

/**
 * Class representing SubscribeType
 *
 *
 * XSD Type: SubscribeType
 *
 * @method \jamesiarmes\PEWS\API\Type\PullSubscriptionRequestType getPullSubscriptionRequest()
 * @method SubscribeType setPullSubscriptionRequest(\jamesiarmes\PEWS\API\Type\PullSubscriptionRequestType $pullSubscriptionRequest)
 * @method \jamesiarmes\PEWS\API\Type\PushSubscriptionRequestType getPushSubscriptionRequest()
 * @method SubscribeType setPushSubscriptionRequest(\jamesiarmes\PEWS\API\Type\PushSubscriptionRequestType $pushSubscriptionRequest)
 * @method \jamesiarmes\PEWS\API\Type\StreamingSubscriptionRequestType getStreamingSubscriptionRequest()
 * @method SubscribeType setStreamingSubscriptionRequest(\jamesiarmes\PEWS\API\Type\StreamingSubscriptionRequestType $streamingSubscriptionRequest)
 */
class SubscribeType extends BaseRequestType
{

    /**
     * @var \jamesiarmes\PEWS\API\Type\PullSubscriptionRequestType
     */
    protected $pullSubscriptionRequest = null;

    /**
     * @var \jamesiarmes\PEWS\API\Type\PushSubscriptionRequestType
     */
    protected $pushSubscriptionRequest = null;

    /**
     * @var \jamesiarmes\PEWS\API\Type\StreamingSubscriptionRequestType
     */
    protected $streamingSubscriptionRequest = null;
}
