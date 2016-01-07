<?php
/**
 * Contains EWSType_SendNotificationResultType.
 */

/**
 * Defines the response of a client application to a push notification.
 *
 * @package php-ews\Types
 */
class EWSType_SendNotificationResultType extends EWSType
{
    /**
     * Describes the status of a push subscription.
     *
     * @since Exchange 2007
     *
     * @var EWSType_SubscriptionStatusType
     */
    public $SubscriptionStatus;
}
