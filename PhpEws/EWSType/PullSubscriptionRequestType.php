<?php
/**
 * Definition of the PullSubscriptionRequestType type
 *
 * @package php-ews
* @subpackage Types
 */

namespace EWSType;

use PhpEws;
/**
 * Definition of the PullSubscriptionRequestType type
 */
class PullSubscriptionRequestType extends PhpEws\EWSType
{
    /**
     * Timeout property
     *
     * @var SubscriptionTimeoutType
     */
    public $Timeout;
}
