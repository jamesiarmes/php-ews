<?php
/**
 * Definition of the SubscribeResponseMessageType type
 *
 * @package php-ews
 * @subpackage Types
 */

namespace \PhpEws\EWSType;

/**
 * Definition of the SubscribeResponseMessageType type
 */
class SubscribeResponseMessageType extends EWSType
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
