<?php
/**
 * Definition of the GetEventsResponseMessageType type
 *
 * @package php-ews
* @subpackage Types
 */

namespace EWSType;

use PhpEws;
/**
 * Definition of the GetEventsResponseMessageType type
 */
class GetEventsResponseMessageType extends PhpEws\EWSType
{
    /**
     * Notification property
     *
     * @var NotificationType
     */
    public $Notification;
}
