<?php
/**
 * Definition of the NotificationType type
 *
 * @package php-ews
 * @subpackage Types
 */

/**
 * Definition of the NotificationType type
 */
class EWSType_NotificationType extends EWSType
{
    /**
     * SubscriptionId property
     *
     * @var EWSType_SubscriptionIdType
     */
    public $SubscriptionId;

    /**
     * PreviousWatermark property
     *
     * @var EWSType_WatermarkType
     */
    public $PreviousWatermark;

    /**
     * MoreEvents property
     *
     * @var boolean
     */
    public $MoreEvents;

    /**
     * CopiedEvent property
     *
     * @var EWSType_MovedCopiedEventType
     */
    public $CopiedEvent;

    /**
     * CreatedEvent property
     *
     * @var EWSType_BaseObjectChangedEventType
     */
    public $CreatedEvent;

    /**
     * DeletedEvent property
     *
     * @var EWSType_BaseObjectChangedEventType
     */
    public $DeletedEvent;

    /**
     * ModifiedEvent property
     *
     * @var EWSType_ModifiedEventType
     */
    public $ModifiedEvent;

    /**
     * MovedEvent property
     *
     * @var EWSType_MovedCopiedEventType
     */
    public $MovedEvent;

    /**
     * NewMailEvent property
     *
     * @var EWSType_BaseObjectChangedEventType
     */
    public $NewMailEvent;

    /**
     * StatusEvent property
     *
     * @var EWSType_BaseNotificationEventType
     */
    public $StatusEvent;
}
