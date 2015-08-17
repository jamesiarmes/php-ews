<?php

namespace jamesiarmes\PEWS\API\Messages;

/**
 * Class representing SubscribeType
 *
 *
 * XSD Type: SubscribeType
 *
 * @method SubscribeType getPullSubscriptionRequest()
 * @method SubscribeType setPullSubscriptionRequest(\jamesiarmes\PEWS\API\TypeTest\PullSubscriptionRequestType $pullSubscriptionRequest)
 * @method SubscribeType getPushSubscriptionRequest()
 * @method SubscribeType setPushSubscriptionRequest(\jamesiarmes\PEWS\API\TypeTest\PushSubscriptionRequestType $pushSubscriptionRequest)
 * @method SubscribeType getStreamingSubscriptionRequest()
 * @method SubscribeType setStreamingSubscriptionRequest(\jamesiarmes\PEWS\API\TypeTest\StreamingSubscriptionRequestType $streamingSubscriptionRequest)
 */
class SubscribeType extends BaseRequestType
{

    /**
     * @property \jamesiarmes\PEWS\API\TypeTest\PullSubscriptionRequestType
     * $pullSubscriptionRequest
     */
    protected $pullSubscriptionRequest = null;

    /**
     * @property \jamesiarmes\PEWS\API\TypeTest\PushSubscriptionRequestType
     * $pushSubscriptionRequest
     */
    protected $pushSubscriptionRequest = null;

    /**
     * @property \jamesiarmes\PEWS\API\TypeTest\StreamingSubscriptionRequestType
     * $streamingSubscriptionRequest
     */
    protected $streamingSubscriptionRequest = null;


}

