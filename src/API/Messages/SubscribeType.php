<?php

namespace jamesiarmes\PEWS\API\Messages;

/**
 * Class representing SubscribeType
 *
 *
 * XSD Type: SubscribeType
 *
 * @method SubscribeType getPullSubscriptionRequest()
 * @method SubscribeType setPullSubscriptionRequest($pullSubscriptionRequest)
 * @method SubscribeType getPushSubscriptionRequest()
 * @method SubscribeType setPushSubscriptionRequest($pushSubscriptionRequest)
 * @method SubscribeType getStreamingSubscriptionRequest()
 * @method SubscribeType
 * setStreamingSubscriptionRequest($streamingSubscriptionRequest)
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

