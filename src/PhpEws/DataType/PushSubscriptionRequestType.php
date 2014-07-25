<?php

namespace PhpEws\DataType;

use PhpEws\DataType;
/**
 * Definition of the PushSubscriptionRequestType type
 *
 * @package php-ews
 * @subpackage Types
 */

/**
 * Definition of the PushSubscriptionRequestType type
 */
class PushSubscriptionRequestType extends DataType
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
