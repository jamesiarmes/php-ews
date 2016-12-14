<?php
/**
 * Contains \jamesiarmes\PhpEws\Type\SendNotificationResultType.
 */

namespace jamesiarmes\PhpEws\Type;

use \jamesiarmes\PhpEws\Type;

/**
 * Defines the response of a client application to a push notification.
 *
 * @package php-ews\Type
 */
class SendNotificationResultType extends Type
{
    /**
     * Describes the status of a push subscription.
     *
     * @since Exchange 2007
     *
     * @var string
     *
     * @see \jamesiarmes\PhpEws\Enumeration\SubscriptionStatusType
     */
    public $SubscriptionStatus;
}
