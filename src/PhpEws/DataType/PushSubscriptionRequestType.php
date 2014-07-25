<?php

namespace PhpEws\DataType;

use PhpEws\DataType;

/**
 * Definition of the PushSubscriptionRequestType type
 */
class PushSubscriptionRequestType extends DataType
{
    /**
     * StatusFrequency property
     *
     * @var SubscriptionStatusFrequencyType
     */
    public $StatusFrequency;

    /**
     * URL property
     *
     * @var string
     */
    public $URL;
}
