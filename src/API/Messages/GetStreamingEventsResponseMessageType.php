<?php

namespace jamesiarmes\PEWS\API\Messages;

/**
 * Class representing GetStreamingEventsResponseMessageType
 *
 *
 * XSD Type: GetStreamingEventsResponseMessageType
 *
 * @method GetStreamingEventsResponseMessageType getNotifications()
 * @method GetStreamingEventsResponseMessageType setNotifications($notifications)
 * @method GetStreamingEventsResponseMessageType getErrorSubscriptionIds()
 * @method GetStreamingEventsResponseMessageType
 * setErrorSubscriptionIds($errorSubscriptionIds)
 * @method GetStreamingEventsResponseMessageType getConnectionStatus()
 * @method GetStreamingEventsResponseMessageType
 * setConnectionStatus($connectionStatus)
 */
class GetStreamingEventsResponseMessageType extends ResponseMessageType
{

    /**
     * @property array $notifications
     */
    protected $notifications = null;

    /**
     * @property array $errorSubscriptionIds
     */
    protected $errorSubscriptionIds = null;

    /**
     * @property string $connectionStatus
     */
    protected $connectionStatus = null;


}

