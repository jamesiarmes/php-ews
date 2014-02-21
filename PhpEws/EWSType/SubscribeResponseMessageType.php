<?php
/**
 * Definition of the SubscribeResponseMessageType type
 *
 * @package php-ews
* @subpackage Types
 */

namespace EWSType;

use PhpEws;
/**
 * Definition of the SubscribeResponseMessageType type
 */
class SubscribeResponseMessageType extends PhpEws\EWSType
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
