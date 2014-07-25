<?php

namespace PhpEws\DataType;

use PhpEws\DataType;
/**
 * Definition of the GetEventsResponseMessageType type
 *
 * @package php-ews
 * @subpackage Types
 */

/**
 * Definition of the GetEventsResponseMessageType type
 */
class GetEventsResponseMessageType extends DataType
{
    /**
     * Notification property
     *
     * @var EWSType_NotificationType
     */
    public $Notification;
}
