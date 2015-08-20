<?php

namespace jamesiarmes\PEWS\API\Message;

/**
 * Class representing GetStreamingEventsType
 *
 *
 * XSD Type: GetStreamingEventsType
 *
 * @method array getSubscriptionIds()
 * @method GetStreamingEventsType setSubscriptionIds(array $subscriptionIds)
 * @method integer getConnectionTimeout()
 * @method GetStreamingEventsType setConnectionTimeout(integer $connectionTimeout)
 */
class GetStreamingEventsType extends BaseRequestType
{

    /**
     * @var string[]
     */
    protected $subscriptionIds = null;

    /**
     * @var integer
     */
    protected $connectionTimeout = null;
}
