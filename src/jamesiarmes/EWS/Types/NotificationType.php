<?php
/**
 * Contains NotificationType.
 */

namespace jamesiarmes\EWS\Types;

use jamesiarmes\EWS\EWSType;

/**
 * Contains information about the subscription and the events that have occurred
 * since the last notification.
 *
 * @package jamesiarmes\EWS\Types
 */
class NotificationType extends EWSType
{
    /**
     * Represents an event in which an item or folder is copied.
     *
     * @since Exchange 2007
     *
     * @var MovedCopiedEventType
     */
    public $CopiedEvent;

    /**
     * Represents an event in which an item or folder is created.
     *
     * @since Exchange 2007
     *
     * @var BaseObjectChangedEventType
     */
    public $CreatedEvent;

    /**
     * Represents an event in which an item or folder is deleted.
     *
     * @since Exchange 2007
     *
     * @var BaseObjectChangedEventType
     */
    public $DeletedEvent;

    /**
     * Represents an event in which an item’s free/busy time has changed.
     *
     * @since Exchange 2010
     *
     * @var BaseObjectChangedEventType
     */
    public $FreeBusyChangedEvent;

    /**
     * Represents an event in which an item or folder is modified.
     *
     * @since Exchange 2007
     *
     * @var ModifiedEventType
     */
    public $ModifiedEvent;

    /**
     * Indicates whether there are more events in the queue to be delivered to
     * the client.
     *
     * @since Exchange 2007
     *
     * @var boolean
     */
    public $MoreEvents;

    /**
     * Represents an event in which an item or folder is moved from one parent
     * folder to another parent folder.
     *
     * @since Exchange 2007
     *
     * @var MovedCopiedEventType
     */
    public $MovedEvent;

    /**
     * Represents an event that is triggered by a new mail item in a mailbox.
     *
     * @since Exchange 2007
     *
     * @var BaseObjectChangedEventType
     */
    public $NewMailEvent;

    /**
     * Represents the watermark of the latest event that was successfully
     * communicated to the client for the subscription.
     *
     * @since Exchange 2007
     *
     * @var string
     */
    public $PreviousWatermark;

    /**
     * Represents a notification that no new activity has occurred in the
     * mailbox.
     *
     * @since Exchange 2007
     *
     * @var BaseNotificationEventType
     */
    public $StatusEvent;

    /**
     * Represents the identifier for a subscription.
     *
     * @since Exchange 2007
     *
     * @var string
     */
    public $SubscriptionId;
}
