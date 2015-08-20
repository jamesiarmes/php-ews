<?php

namespace jamesiarmes\PEWS\API\Message;

/**
 * Class representing GetStreamingEventsType
 *
 *
 * XSD Type: GetStreamingEventsType
 *
 * @method GetStreamingEventsType getSubscriptionIds()
 * @method GetStreamingEventsType setSubscriptionIds(array $subscriptionIds)
 * @method GetStreamingEventsType getConnectionTimeout()
 * @method GetStreamingEventsType setConnectionTimeout(integer $connectionTimeout)
 */
class GetStreamingEventsType extends BaseRequestType
{

    /**
     * @property string[] $subscriptionIds
     */
    protected $subscriptionIds = null;

    /**
     * @property integer $connectionTimeout
     */
    protected $connectionTimeout = null;


}

