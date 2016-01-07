<?php
/**
 * Contains EWSType_UnsubscribeType.
 */

/**
 * Defines the properties used to unsubscribe from a subscription.
 *
 * @package php-ews\Types
 *
 * @todo Extend EWSType_BaseRequestType.
 */
class EWSType_UnsubscribeType extends EWSType
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
