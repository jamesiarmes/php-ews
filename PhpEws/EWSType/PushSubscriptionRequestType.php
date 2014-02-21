<?php
/**
 * Definition of the PushSubscriptionRequestType type
 *
 * @package php-ews
* @subpackage Types
 */

namespace EWSType;

use PhpEws;
/**
 * Definition of the PushSubscriptionRequestType type
 */
class PushSubscriptionRequestType extends PhpEws\EWSType
{
    /**
     * StatusFrequency property
     *
     * @var SubscriptionStatusFrequencyType
     */
    public $StatusFrequency;

    /**
     * URL property
     *
     * @var string
     */
    public $URL;
}
