<?php
/**
 * Contains UnsubscribeType.
 */

namespace jamesiarmes\EWS\Types;

use jamesiarmes\EWS\EWSType;

/**
 * Defines the properties used to unsubscribe from a subscription.
 *
 * @package jamesiarmes\EWS\Types
 *
 * @todo Extend BaseRequestType.
 */
class UnsubscribeType extends EWSType
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
