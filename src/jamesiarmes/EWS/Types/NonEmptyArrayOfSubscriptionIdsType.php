<?php
/**
 * Contains NonEmptyArrayOfSubscriptionIdsType.
 */

namespace jamesiarmes\EWS\Types;

use jamesiarmes\EWS\EWSType;

/**
 * Represents an array of invalid subscription IDs.
 *
 * @package jamesiarmes\EWS\Types
 */
class NonEmptyArrayOfSubscriptionIdsType extends EWSType
{
    /**
     * Represents the identifier for a subscription.
     *
     * @since Exchange 2010 SP1
     *
     * @var string
     */
    public $SubscriptionId;
}
