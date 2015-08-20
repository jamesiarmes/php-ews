<?php

namespace jamesiarmes\PEWS\API\Message;

/**
 * Class representing UnsubscribeType
 *
 *
 * XSD Type: UnsubscribeType
 *
 * @method string getSubscriptionId()
 * @method UnsubscribeType setSubscriptionId(string $subscriptionId)
 */
class UnsubscribeType extends BaseRequestType
{

    /**
     * @var string
     */
    protected $subscriptionId = null;
}
