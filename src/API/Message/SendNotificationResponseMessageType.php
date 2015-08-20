<?php

namespace jamesiarmes\PEWS\API\Message;

/**
 * Class representing SendNotificationResponseMessageType
 *
 *
 * XSD Type: SendNotificationResponseMessageType
 *
 * @method SendNotificationResponseMessageType getNotification()
 * @method SendNotificationResponseMessageType setNotification(\jamesiarmes\PEWS\API\Type\NotificationType $notification)
 */
class SendNotificationResponseMessageType extends ResponseMessageType
{

    /**
     * @property \jamesiarmes\PEWS\API\Type\NotificationType $notification
     */
    protected $notification = null;
}
