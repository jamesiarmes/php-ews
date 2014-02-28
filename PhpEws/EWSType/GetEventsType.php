<?php
/**
 * Definition of the GetEventsType type
 *
 * @package php-ews
* @subpackage Types
 */

namespace EWSType;

use PhpEws;
/**
 * Definition of the GetEventsType type
 */
class GetEventsType extends PhpEws\EWSType
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
