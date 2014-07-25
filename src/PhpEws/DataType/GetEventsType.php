<?php

namespace PhpEws\DataType;

use PhpEws\DataType;
/**
 * Definition of the GetEventsType type
 *
 * @package php-ews
 * @subpackage Types
 */

/**
 * Definition of the GetEventsType type
 */
class GetEventsType extends DataType
{
    /**
     * SubscriptionId property
     *
     * @var EWSType_SubscriptionIdType
     */
    public $SubscriptionId;

    /**
     * Watermark property
     *
     * @var EWSType_WatermarkType
     */
    public $Watermark;
}
