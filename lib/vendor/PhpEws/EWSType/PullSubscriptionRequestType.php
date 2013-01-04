<?php
/**
 * Definition of the PullSubscriptionRequestType type
 *
 * @package php-ews
 * @subpackage Types
 */

namespace PhpEws\EWSType;

/**
 * Definition of the PullSubscriptionRequestType type
 */
class PullSubscriptionRequestType extends EWSType
{
    /**
     * Timeout property
     *
     * @var EWSType_SubscriptionTimeoutType
     */
    public $Timeout;
}
