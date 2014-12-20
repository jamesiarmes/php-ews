<?php
/**
 * Contains EWSType_NonEmptyArrayOfNotificationEventTypesType.
 */

/**
 * Represents a collection of event notification types that are used to create a
 * subscription.
 *
 * @package php-ews\Types
 */
class EWSType_NonEmptyArrayOfNotificationEventTypesType extends EWSType
{
    /**
     * Represents a requested event notification type that is used to create a
     * subscription.
     *
     * @since Exchange 2007
     *
     * @var \jamesiarmes\PhpEws\Enumeration\NotificationEventTypeType
     */
    public $EventType;
}
