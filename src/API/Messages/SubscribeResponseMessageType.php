<?php

namespace jamesiarmes\PEWS\API\Messages;

/**
 * Class representing SubscribeResponseMessageType
 *
 *
 * XSD Type: SubscribeResponseMessageType
 *
 * @method SubscribeResponseMessageType getSubscriptionId()
 * @method SubscribeResponseMessageType setSubscriptionId($subscriptionId)
 * @method SubscribeResponseMessageType getWatermark()
 * @method SubscribeResponseMessageType setWatermark($watermark)
 */
class SubscribeResponseMessageType extends ResponseMessageType
{

    /**
     * @property string $subscriptionId
     */
    protected $subscriptionId = null;

    /**
     * @property string $watermark
     */
    protected $watermark = null;


}

