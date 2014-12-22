<?php
/**
 * Contains EWSType_NonEmptyArrayOfNotificationsType.
 */

/**
 * Represents an array of information about the subscription and the events that
 * have occurred since the last notification.
 *
 * @package php-ews\Types
 */
class EWSType_NonEmptyArrayOfNotificationsType extends EWSType
{
    /**
     * Contains information about the subscription and the events that have
     * occurred since the last notification.
     *
     * @since Exchange 2010 SP1
     *
     * @var EWSType_NotificationType
     */
    public $Notification;
}
