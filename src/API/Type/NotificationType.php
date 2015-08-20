<?php

namespace jamesiarmes\PEWS\API\Type;

use jamesiarmes\PEWS\API\Type;

/**
 * Class representing NotificationType
 *
 *
 * XSD Type: NotificationType
 *
 * @method NotificationType getSubscriptionId()
 * @method NotificationType setSubscriptionId(string $subscriptionId)
 * @method NotificationType getPreviousWatermark()
 * @method NotificationType setPreviousWatermark(string $previousWatermark)
 * @method NotificationType getMoreEvents()
 * @method NotificationType setMoreEvents(boolean $moreEvents)
 * @method NotificationType getCopiedEvent()
 * @method NotificationType setCopiedEvent(array $copiedEvent)
 * @method NotificationType getCreatedEvent()
 * @method NotificationType setCreatedEvent(array $createdEvent)
 * @method NotificationType getDeletedEvent()
 * @method NotificationType setDeletedEvent(array $deletedEvent)
 * @method NotificationType getModifiedEvent()
 * @method NotificationType setModifiedEvent(array $modifiedEvent)
 * @method NotificationType getMovedEvent()
 * @method NotificationType setMovedEvent(array $movedEvent)
 * @method NotificationType getNewMailEvent()
 * @method NotificationType setNewMailEvent(array $newMailEvent)
 * @method NotificationType getStatusEvent()
 * @method NotificationType setStatusEvent(array $statusEvent)
 * @method NotificationType getFreeBusyChangedEvent()
 * @method NotificationType setFreeBusyChangedEvent(array $freeBusyChangedEvent)
 */
class NotificationType extends Type
{

    /**
     * @property string $subscriptionId
     */
    protected $subscriptionId = null;

    /**
     * @property string $previousWatermark
     */
    protected $previousWatermark = null;

    /**
     * @property boolean $moreEvents
     */
    protected $moreEvents = null;

    /**
     * @property \jamesiarmes\PEWS\API\Type\MovedCopiedEventType[] $copiedEvent
     */
    protected $copiedEvent = null;

    /**
     * @property \jamesiarmes\PEWS\API\Type\BaseObjectChangedEventType[] $createdEvent
     */
    protected $createdEvent = null;

    /**
     * @property \jamesiarmes\PEWS\API\Type\BaseObjectChangedEventType[] $deletedEvent
     */
    protected $deletedEvent = null;

    /**
     * @property \jamesiarmes\PEWS\API\Type\ModifiedEventType[] $modifiedEvent
     */
    protected $modifiedEvent = null;

    /**
     * @property \jamesiarmes\PEWS\API\Type\MovedCopiedEventType[] $movedEvent
     */
    protected $movedEvent = null;

    /**
     * @property \jamesiarmes\PEWS\API\Type\BaseObjectChangedEventType[] $newMailEvent
     */
    protected $newMailEvent = null;

    /**
     * @property \jamesiarmes\PEWS\API\Type\BaseNotificationEventType[] $statusEvent
     */
    protected $statusEvent = null;

    /**
     * @property \jamesiarmes\PEWS\API\Type\BaseObjectChangedEventType[]
     * $freeBusyChangedEvent
     */
    protected $freeBusyChangedEvent = null;
}
