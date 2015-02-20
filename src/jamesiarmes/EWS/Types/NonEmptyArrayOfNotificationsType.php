<?php
/**
 * Contains NonEmptyArrayOfNotificationsType.
 */

namespace jamesiarmes\EWS\Types;

use jamesiarmes\EWS\EWSType;

/**
 * Represents an array of information about the subscription and the events that
 * have occurred since the last notification.
 *
 * @package jamesiarmes\EWS\Types
 */
class NonEmptyArrayOfNotificationsType extends EWSType
{
    /**
     * Contains information about the subscription and the events that have
     * occurred since the last notification.
     *
     * @since Exchange 2010 SP1
     *
     * @var NotificationType
     */
    public $Notification;
}
