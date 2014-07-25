<?php

namespace PhpEws\DataType;

use PhpEws\DataType;

/**
 * Definition of the GetEventsType type
 */
class GetEventsType extends DataType
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
