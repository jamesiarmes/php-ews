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
     * @var EWSType_PullSubscriptionRequestType
     */
    public $PullSubscriptionRequest;

    /**
     * PushSubscriptionRequest property
     *
     * @var EWSType_PushSubscriptionRequestType
     */
    public $PushSubscriptionRequest;
}
