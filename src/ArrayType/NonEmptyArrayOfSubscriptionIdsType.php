<?php
/**
 * Contains \jamesiarmes\PhpEws\ArrayType\NonEmptyArrayOfSubscriptionIdsType.
 */

namespace jamesiarmes\PhpEws\ArrayType;

use \jamesiarmes\PhpEws\ArrayType;

/**
 * Represents an array of invalid subscription IDs.
 *
 * @package php-ews\Array
 */
class NonEmptyArrayOfSubscriptionIdsType extends ArrayType
{
    /**
     * Represents the identifier for a subscription.
     *
     * @since Exchange 2010 SP1
     *
     * @var string[]
     */
    public $SubscriptionId = array();
}
