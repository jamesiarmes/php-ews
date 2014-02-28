<?php
/**
 * Definition of the SubscribeType type
 *
 * @package php-ews
* @subpackage Types
 */

namespace EWSType;

use PhpEws;
/**
 * Definition of the SubscribeType type
 */
class SubscribeType extends PhpEws\EWSType
{
    /**
     * PullSubscriptionRequest property
     *
     * @var PullSubscriptionRequestType
     */
    public $PullSubscriptionRequest;

    /**
     * PushSubscriptionRequest property
     *
     * @var PushSubscriptionRequestType
     */
    public $PushSubscriptionRequest;
}
