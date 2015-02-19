<?php
/**
 * Contains \jamesiarmes\PhpEws\Type\SendNotificationResponseMessageType.
 */

namespace jamesiarmes\PhpEws\Type;

/**
 * Represents the status and result of a single SendNotification operation
 * request.
 *
 * @package php-ews\Types
 */
class SendNotificationResponseMessageType extends ResponseMessageType
{
    /**
     * Contains information about the subscription and the events that have
     * occurred since the last notification.
     *
     * @since Exchange 2007
     *
     * @var \jamesiarmes\PhpEws\Type\NotificationType
     */
    public $Notification;
}
