<?php

namespace PhpEws\DataType;

use PhpEws\DataType;

/**
 * Definition of the PullSubscriptionRequestType type
 */
class PullSubscriptionRequestType extends DataType
{
    /**
     * Timeout property
     *
     * @var EWSType_SubscriptionTimeoutType
     */
    public $Timeout;
}
