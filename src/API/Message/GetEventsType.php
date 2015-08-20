<?php

namespace jamesiarmes\PEWS\API\Message;

/**
 * Class representing GetEventsType
 *
 *
 * XSD Type: GetEventsType
 *
 * @method GetEventsType getSubscriptionId()
 * @method GetEventsType setSubscriptionId(string $subscriptionId)
 * @method GetEventsType getWatermark()
 * @method GetEventsType setWatermark(string $watermark)
 */
class GetEventsType extends BaseRequestType
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

