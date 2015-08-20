<?php

namespace jamesiarmes\PEWS\API\Message;

/**
 * Class representing SendNotificationResponseMessageType
 *
 *
 * XSD Type: SendNotificationResponseMessageType
 *
 * @method \jamesiarmes\PEWS\API\Type\NotificationType getNotification()
 * @method SendNotificationResponseMessageType setNotification(\jamesiarmes\PEWS\API\Type\NotificationType $notification)
 */
class SendNotificationResponseMessageType extends ResponseMessageType
{

    /**
     * @var \jamesiarmes\PEWS\API\Type\NotificationType
     */
    protected $notification = null;
}
