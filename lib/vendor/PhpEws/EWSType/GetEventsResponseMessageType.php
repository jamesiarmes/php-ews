<?php
/**
 * Definition of the GetEventsResponseMessageType type
 *
 * @package php-ews
 * @subpackage Types
 */

namespace \PhpEws\EWSType;

/**
 * Definition of the GetEventsResponseMessageType type
 */
class GetEventsResponseMessageType extends EWSType
{
    /**
     * Notification property
     *
     * @var EWSType_NotificationType
     */
    public $Notification;
}
