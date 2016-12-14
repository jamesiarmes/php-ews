<?php
/**
 * Contains \jamesiarmes\PhpEws\ArrayType\NonEmptyArrayOfNotificationEventTypesType.
 */

namespace jamesiarmes\PhpEws\ArrayType;

use \jamesiarmes\PhpEws\ArrayType;

/**
 * Represents a collection of event notification types that are used to create a
 * subscription.
 *
 * @package php-ews\Array
 */
class NonEmptyArrayOfNotificationEventTypesType extends ArrayType
{
    /**
     * Represents a requested event notification type that is used to create a
     * subscription.
     *
     * @since Exchange 2007
     *
     * @var string[]
     *
     * @see \jamesiarmes\PhpEws\Enumeration\NotificationEventTypeType[]
     */
    public $EventType = array();
}
