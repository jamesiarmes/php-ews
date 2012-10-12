<?php
/**
 * Definition of the GetEventsType type
 *
 * @package php-ews
 * @subpackage Types
 */

/**
 * Definition of the GetEventsType type
 */
class EWSType_GetEventsType extends EWSType
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
