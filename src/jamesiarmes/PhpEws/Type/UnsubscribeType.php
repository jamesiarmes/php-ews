<?php
/**
 * Contains \jamesiarmes\PhpEws\Type\UnsubscribeType.
 */

namespace jamesiarmes\PhpEws\Type;

/**
 * Defines the properties used to unsubscribe from a subscription.
 *
 * @package php-ews\Types
 */
class UnsubscribeType extends BaseRequestType
{
    /**
     * Represents the identifier for a subscription.
     *
     * @since Exchange 2007
     *
     * @var string
     */
    public $SubscriptionId;
}
