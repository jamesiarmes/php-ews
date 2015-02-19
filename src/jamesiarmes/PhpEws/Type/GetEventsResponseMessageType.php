<?php
/**
 * Contains \jamesiarmes\PhpEws\Type\GetEventsResponseMessageType.
 */

namespace jamesiarmes\PhpEws\Type;

/**
 * Represents the status and result of a single GetEvents operation request.
 *
 * @package php-ews\Types
 */
class GetEventsResponseMessageType extends ResponseMessageType
{
    /**
     * Contains information about the subscription and the events that have
     * occurred since the last notification.
     *
     * @since Exchange 2007
     *
     * @var \jamesiarmes\PhpEws\Type\NotificationType
     */
    public $Notification;
}
