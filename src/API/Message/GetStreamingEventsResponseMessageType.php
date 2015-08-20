<?php

namespace jamesiarmes\PEWS\API\Message;

/**
 * Class representing GetStreamingEventsResponseMessageType
 *
 *
 * XSD Type: GetStreamingEventsResponseMessageType
 *
 * @method array getNotifications()
 * @method GetStreamingEventsResponseMessageType setNotifications(array $notifications)
 * @method array getErrorSubscriptionIds()
 * @method GetStreamingEventsResponseMessageType setErrorSubscriptionIds(array $errorSubscriptionIds)
 * @method string getConnectionStatus()
 * @method GetStreamingEventsResponseMessageType setConnectionStatus(string $connectionStatus)
 */
class GetStreamingEventsResponseMessageType extends ResponseMessageType
{

    /**
     * @var \jamesiarmes\PEWS\API\Type\NotificationType[]
     */
    protected $notifications = null;

    /**
     * @var string[]
     */
    protected $errorSubscriptionIds = null;

    /**
     * @var string
     */
    protected $connectionStatus = null;
}
