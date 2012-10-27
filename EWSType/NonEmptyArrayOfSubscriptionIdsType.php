<?php
/**
 * Contains EWSType_NonEmptyArrayOfSubscriptionIdsType.
 */

/**
 * Represents an array of invalid subscription IDs.
 *
 * @package php-ews\Types
 */
class EWSType_NonEmptyArrayOfSubscriptionIdsType extends EWSType
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
