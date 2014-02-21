<?php
/**
 * Definition of the SendNotificationResponseMessageType type
 *
 * @package php-ews
* @subpackage Types
 */

namespace EWSType;

use PhpEws;
/**
 * Definition of the SendNotificationResponseMessageType type
 */
class SendNotificationResponseMessageType extends PhpEws\EWSType
{
    /**
     * Notification property
     *
     * @var NotificationType
     */
    public $Notification;
}
