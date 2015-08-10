<?php

namespace jamesiarmes\PEWS\API\Messages;

/**
 * Class representing GetStreamingEventsType
 *
 *
 * XSD Type: GetStreamingEventsType
 *
 * @method GetStreamingEventsType getSubscriptionIds()
 * @method GetStreamingEventsType setSubscriptionIds($subscriptionIds)
 * @method GetStreamingEventsType getConnectionTimeout()
 * @method GetStreamingEventsType setConnectionTimeout($connectionTimeout)
 */
class GetStreamingEventsType extends BaseRequestType
{

    /**
     * @property array $subscriptionIds
     */
    protected $subscriptionIds = null;

    /**
     * @property integer $connectionTimeout
     */
    protected $connectionTimeout = null;


}

