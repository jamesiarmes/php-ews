<?php
/**
 * Contains \jamesiarmes\PhpEws\ArrayType\NonEmptyArrayOfNotificationsType.
 */

namespace jamesiarmes\PhpEws\ArrayType;

use \jamesiarmes\PhpEws\ArrayType;

/**
 * Represents an array of information about the subscription and the events that
 * have occurred since the last notification.
 *
 * @package php-ews\Array
 */
class NonEmptyArrayOfNotificationsType extends ArrayType
{
    /**
     * Contains information about the subscription and the events that have
     * occurred since the last notification.
     *
     * @since Exchange 2010 SP1
     *
     * @var \jamesiarmes\PhpEws\Type\NotificationType[]
     */
    public $Notification = array();
}
