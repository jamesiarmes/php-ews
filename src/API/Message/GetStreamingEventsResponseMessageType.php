<?php

namespace jamesiarmes\PEWS\API\Message;

/**
 * Class representing GetStreamingEventsResponseMessageType
 *
 *
 * XSD Type: GetStreamingEventsResponseMessageType
 *
 * @method GetStreamingEventsResponseMessageType getNotifications()
 * @method GetStreamingEventsResponseMessageType setNotifications(array $notifications)
 * @method GetStreamingEventsResponseMessageType getErrorSubscriptionIds()
 * @method GetStreamingEventsResponseMessageType setErrorSubscriptionIds(array $errorSubscriptionIds)
 * @method GetStreamingEventsResponseMessageType getConnectionStatus()
 * @method GetStreamingEventsResponseMessageType setConnectionStatus(string $connectionStatus)
 */
class GetStreamingEventsResponseMessageType extends ResponseMessageType
{

    /**
     * @property \jamesiarmes\PEWS\API\Type\NotificationType[] $notifications
     */
    protected $notifications = null;

    /**
     * @property string[] $errorSubscriptionIds
     */
    protected $errorSubscriptionIds = null;

    /**
     * @property string $connectionStatus
     */
    protected $connectionStatus = null;


}

