<?php

namespace PhpEws\DataType;

use PhpEws\DataType;

/**
 * Definition of the SubscribeResponseMessageType type
 */
class SubscribeResponseMessageType extends DataType
{
    /**
     * SubscriptionId property
     *
     * @var SubscriptionIdType
     */
    public $SubscriptionId;

    /**
     * Watermark property
     *
     * @var WatermarkType
     */
    public $Watermark;
}
