<?php

namespace jamesiarmes\PEWS\API\Message;

/**
 * Class representing SubscribeResponseMessageType
 *
 *
 * XSD Type: SubscribeResponseMessageType
 *
 * @method string getSubscriptionId()
 * @method SubscribeResponseMessageType setSubscriptionId(string $subscriptionId)
 * @method string getWatermark()
 * @method SubscribeResponseMessageType setWatermark(string $watermark)
 */
class SubscribeResponseMessageType extends ResponseMessageType
{

    /**
     * @var string
     */
    protected $subscriptionId = null;

    /**
     * @var string
     */
    protected $watermark = null;
}
