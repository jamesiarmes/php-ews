<?php

namespace PhpEws\DataType;

use PhpEws\DataType;

/**
 * Definition of the SubscribeType type
 */
class SubscribeType extends DataType
{
    /**
     * PullSubscriptionRequest property
     *
     * @var PullSubscriptionRequestType
     */
    public $PullSubscriptionRequest;

    /**
     * PushSubscriptionRequest property
     *
     * @var PushSubscriptionRequestType
     */
    public $PushSubscriptionRequest;
}
