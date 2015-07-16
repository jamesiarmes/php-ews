<?php
/**
 * Contains \jamesiarmes\PEWS\API\Enumeration\SubscriptionStatusType.
 */

namespace jamesiarmes\PEWS\API\Enumeration;

use \jamesiarmes\PEWS\API\Enumeration;

/**
 * Describes the status of a push subscription.
 *
 * @package php-ews\Enumeration
 */
class SubscriptionStatusType extends Enumeration
{
    /**
     * Indicates that the notification has been received and the subscription is
     * to continue.
     *
     * @since Exchange 2007
     *
     * @var string
     */
    const OK = 'OK';

    /**
     * Indicates that push notifications from the subscription should be ceased.
     *
     * @since Exchange 2007
     *
     * @var string
     */
    const UNSUBSCRIBE = 'Unsubscribe';
}
