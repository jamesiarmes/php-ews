<?php
/**
 * Definition of the NonEmptyArrayOfNotificationEventTypesType type
 *
 * @package php-ews
* @subpackage Types
 */

namespace EWSType;

use PhpEws;
/**
 * Definition of the NonEmptyArrayOfNotificationEventTypesType type
 */
class NonEmptyArrayOfNotificationEventTypesType extends PhpEws\EWSType
{
    /**
     * EventType property
     *
     * @var NotificationEventTypeType
     */
    public $EventType;
}
