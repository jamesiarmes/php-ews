<?php

namespace jamesiarmes\PEWS\API\TypeTest;

use jamesiarmes\PEWS\API\Type;

/**
 * Class representing NotificationType
 *
 *
 * XSD Type: NotificationType
 *
 * @method NotificationType getSubscriptionId()
 * @method NotificationType setSubscriptionId($subscriptionId)
 * @method NotificationType getPreviousWatermark()
 * @method NotificationType setPreviousWatermark($previousWatermark)
 * @method NotificationType getMoreEvents()
 * @method NotificationType setMoreEvents($moreEvents)
 * @method NotificationType getCopiedEvent()
 * @method NotificationType setCopiedEvent($copiedEvent)
 * @method NotificationType getCreatedEvent()
 * @method NotificationType setCreatedEvent($createdEvent)
 * @method NotificationType getDeletedEvent()
 * @method NotificationType setDeletedEvent($deletedEvent)
 * @method NotificationType getModifiedEvent()
 * @method NotificationType setModifiedEvent($modifiedEvent)
 * @method NotificationType getMovedEvent()
 * @method NotificationType setMovedEvent($movedEvent)
 * @method NotificationType getNewMailEvent()
 * @method NotificationType setNewMailEvent($newMailEvent)
 * @method NotificationType getStatusEvent()
 * @method NotificationType setStatusEvent($statusEvent)
 * @method NotificationType getFreeBusyChangedEvent()
 * @method NotificationType setFreeBusyChangedEvent($freeBusyChangedEvent)
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
     * @property array $copiedEvent
     */
    protected $copiedEvent = null;

    /**
     * @property array $createdEvent
     */
    protected $createdEvent = null;

    /**
     * @property array $deletedEvent
     */
    protected $deletedEvent = null;

    /**
     * @property array $modifiedEvent
     */
    protected $modifiedEvent = null;

    /**
     * @property array $movedEvent
     */
    protected $movedEvent = null;

    /**
     * @property array $newMailEvent
     */
    protected $newMailEvent = null;

    /**
     * @property array $statusEvent
     */
    protected $statusEvent = null;

    /**
     * @property array $freeBusyChangedEvent
     */
    protected $freeBusyChangedEvent = null;


}

