<?php

namespace jamesiarmes\PEWS\API\Message;

/**
 * Class representing GetEventsResponseMessageType
 *
 *
 * XSD Type: GetEventsResponseMessageType
 *
 * @method \jamesiarmes\PEWS\API\Type\NotificationType getNotification()
 * @method GetEventsResponseMessageType setNotification(\jamesiarmes\PEWS\API\Type\NotificationType $notification)
 */
class GetEventsResponseMessageType extends ResponseMessageType
{

    /**
     * @var \jamesiarmes\PEWS\API\Type\NotificationType
     */
    protected $notification = null;
}
