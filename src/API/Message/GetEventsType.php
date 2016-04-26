<?php

namespace jamesiarmes\PEWS\API\Message;

/**
 * Class representing GetEventsType
 *
 *
 * XSD Type: GetEventsType
 *
 * @method string getSubscriptionId()
 * @method GetEventsType setSubscriptionId(string $subscriptionId)
 * @method string getWatermark()
 * @method GetEventsType setWatermark(string $watermark)
 */
class GetEventsType extends BaseRequestType
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
