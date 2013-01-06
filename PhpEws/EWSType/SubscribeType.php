<?php
/**
 * Definition of the SubscribeType type
 *
 * @package php-ews
 * @subpackage Types
 */

namespace PhpEws\EWSType;

/**
 * Definition of the SubscribeType type
 */
class SubscribeType extends EWSType
{
    /**
     * PullSubscriptionRequest property
     *
     * @var EWSType_PullSubscriptionRequestType
     */
    public $PullSubscriptionRequest;

    /**
     * PushSubscriptionRequest property
     *
     * @var EWSType_PushSubscriptionRequestType
     */
    public $PushSubscriptionRequest;
}
