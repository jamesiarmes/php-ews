<?php
/**
 * Contains NonEmptyArrayOfNotificationEventTypesType.
 */

namespace jamesiarmes\EWS\Types;

use jamesiarmes\EWS\EWSType;

/**
 * Represents a collection of event notification types that are used to create a
 * subscription.
 *
 * @package jamesiarmes\EWS\Enumerations
 */
class NonEmptyArrayOfNotificationEventTypesType extends EWSType
{
    /**
     * Represents a requested event notification type that is used to create a
     * subscription.
     *
     * @since Exchange 2007
     *
     * @var NotificationEventTypeType
     */
    public $EventType;
}
