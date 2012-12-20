<?php
/**
 * Definition of the PushSubscriptionRequestType type
 *
 * @package php-ews
 * @subpackage Types
 */

namespace \PhpEws\EWSType;

/**
 * Definition of the PushSubscriptionRequestType type
 */
class PushSubscriptionRequestType extends EWSType
{
    /**
     * StatusFrequency property
     *
     * @var EWSType_SubscriptionStatusFrequencyType
     */
    public $StatusFrequency;

    /**
     * URL property
     *
     * @var string
     */
    public $URL;
}
