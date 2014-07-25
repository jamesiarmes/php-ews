<?php

namespace PhpEws\DataType;

use PhpEws\DataType;
/**
 * Definition of the SubscribeResponseMessageType type
 *
 * @package php-ews
 * @subpackage Types
 */

/**
 * Definition of the SubscribeResponseMessageType type
 */
class SubscribeResponseMessageType extends DataType
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
