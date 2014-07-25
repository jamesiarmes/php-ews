<?php

namespace PhpEws\DataType;

use PhpEws\DataType;

/**
 * Definition of the SendNotificationResponseMessageType type
 */
class SendNotificationResponseMessageType extends DataType
{
    /**
     * Notification property
     *
     * @var EWSType_NotificationType
     */
    public $Notification;
}
