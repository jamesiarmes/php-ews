<?php
/**
 * Contains \jamesiarmes\PhpEws\Response\GetStreamingEventsResponseMessageType.
 */

namespace jamesiarmes\PhpEws\Response;

/**
 * Represents the status and result of a single GetStreamingEvents operation
 * request.
 *
 * @package php-ews\Response
 */
class GetStreamingEventsResponseMessageType extends ResponseMessageType
{
    /**
     * Provides a text description of the status of a streaming subscription.
     *
     * @since Exchange 2010 SP1
     *
     * @var string
     *
     * @see \jamesiarmes\PhpEws\Enumeration\ConnectionStatusType
     */
    public $ConnectionStatus;

    /**
     * Contains a list of subscription IDs that are invalid.
     *
     * @since Exchange 2010 SP1
     *
     * @var \jamesiarmes\PhpEws\ArrayType\NonEmptyArrayOfSubscriptionIdsType
     */
    public $ErrorSubscriptionIds;

    /**
     * Contains a list of information about the subscription and the events that
     * have occurred since the last notification.
     *
     * @since Exchange 2010 SP1
     *
     * @var \jamesiarmes\PhpEws\ArrayType\NonEmptyArrayOfNotificationsType
     */
    public $Notifications;
}
