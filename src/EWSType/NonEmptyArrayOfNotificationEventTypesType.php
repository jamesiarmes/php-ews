<?php
/**
 * Contains EWSType_NonEmptyArrayOfNotificationEventTypesType.
 */

/**
 * Represents a collection of event notification types that are used to create a
 * subscription.
 *
 * @package php-ews\Enumerations
 */
class EWSType_NonEmptyArrayOfNotificationEventTypesType extends EWSType
{
    /**
     * Represents a requested event notification type that is used to create a
     * subscription.
     *
     * @since Exchange 2007
     *
     * @var EWSType_NotificationEventTypeType
     */
    public $EventType;
}
