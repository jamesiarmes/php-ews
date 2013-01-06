<?php
/**
 * Definition of the SendNotificationResponseMessageType type
 *
 * @package php-ews
 * @subpackage Types
 */

namespace PhpEws\EWSType;

/**
 * Definition of the SendNotificationResponseMessageType type
 */
class SendNotificationResponseMessageType extends EWSType
{
    /**
     * Notification property
     *
     * @var EWSType_NotificationType
     */
    public $Notification;
}
