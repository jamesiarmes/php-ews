<?php

namespace jamesiarmes\PEWS\API\TypeTest;

use jamesiarmes\PEWS\API\TypeTest;

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
class NotificationType extends TypeTest
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
     * @property \jamesiarmes\PEWS\API\TypeTest\MovedCopiedEventType[] $copiedEvent
     */
    protected $copiedEvent = null;

    /**
     * @property \jamesiarmes\PEWS\API\TypeTest\BaseObjectChangedEventType[]
     * $createdEvent
     */
    protected $createdEvent = null;

    /**
     * @property \jamesiarmes\PEWS\API\TypeTest\BaseObjectChangedEventType[]
     * $deletedEvent
     */
    protected $deletedEvent = null;

    /**
     * @property \jamesiarmes\PEWS\API\TypeTest\ModifiedEventType[] $modifiedEvent
     */
    protected $modifiedEvent = null;

    /**
     * @property \jamesiarmes\PEWS\API\TypeTest\MovedCopiedEventType[] $movedEvent
     */
    protected $movedEvent = null;

    /**
     * @property \jamesiarmes\PEWS\API\TypeTest\BaseObjectChangedEventType[]
     * $newMailEvent
     */
    protected $newMailEvent = null;

    /**
     * @property \jamesiarmes\PEWS\API\TypeTest\BaseNotificationEventType[]
     * $statusEvent
     */
    protected $statusEvent = null;

    /**
     * @property \jamesiarmes\PEWS\API\TypeTest\BaseObjectChangedEventType[]
     * $freeBusyChangedEvent
     */
    protected $freeBusyChangedEvent = null;


}

