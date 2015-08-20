<?php

namespace jamesiarmes\PEWS\API\Type;

use jamesiarmes\PEWS\API\Type;

/**
 * Class representing NotificationType
 *
 *
 * XSD Type: NotificationType
 *
 * @method string getSubscriptionId()
 * @method NotificationType setSubscriptionId(string $subscriptionId)
 * @method string getPreviousWatermark()
 * @method NotificationType setPreviousWatermark(string $previousWatermark)
 * @method boolean getMoreEvents()
 * @method NotificationType setMoreEvents(boolean $moreEvents)
 * @method array getCopiedEvent()
 * @method NotificationType setCopiedEvent(array $copiedEvent)
 * @method array getCreatedEvent()
 * @method NotificationType setCreatedEvent(array $createdEvent)
 * @method array getDeletedEvent()
 * @method NotificationType setDeletedEvent(array $deletedEvent)
 * @method array getModifiedEvent()
 * @method NotificationType setModifiedEvent(array $modifiedEvent)
 * @method array getMovedEvent()
 * @method NotificationType setMovedEvent(array $movedEvent)
 * @method array getNewMailEvent()
 * @method NotificationType setNewMailEvent(array $newMailEvent)
 * @method array getStatusEvent()
 * @method NotificationType setStatusEvent(array $statusEvent)
 * @method array getFreeBusyChangedEvent()
 * @method NotificationType setFreeBusyChangedEvent(array $freeBusyChangedEvent)
 */
class NotificationType extends Type
{

    /**
     * @var string
     */
    protected $subscriptionId = null;

    /**
     * @var string
     */
    protected $previousWatermark = null;

    /**
     * @var boolean
     */
    protected $moreEvents = null;

    /**
     * @var \jamesiarmes\PEWS\API\Type\MovedCopiedEventType[]
     */
    protected $copiedEvent = null;

    /**
     * @var \jamesiarmes\PEWS\API\Type\BaseObjectChangedEventType[]
     */
    protected $createdEvent = null;

    /**
     * @var \jamesiarmes\PEWS\API\Type\BaseObjectChangedEventType[]
     */
    protected $deletedEvent = null;

    /**
     * @var \jamesiarmes\PEWS\API\Type\ModifiedEventType[]
     */
    protected $modifiedEvent = null;

    /**
     * @var \jamesiarmes\PEWS\API\Type\MovedCopiedEventType[]
     */
    protected $movedEvent = null;

    /**
     * @var \jamesiarmes\PEWS\API\Type\BaseObjectChangedEventType[]
     */
    protected $newMailEvent = null;

    /**
     * @var \jamesiarmes\PEWS\API\Type\BaseNotificationEventType[]
     */
    protected $statusEvent = null;

    /**
     * @var \jamesiarmes\PEWS\API\Type\BaseObjectChangedEventType[]
     */
    protected $freeBusyChangedEvent = null;
}
