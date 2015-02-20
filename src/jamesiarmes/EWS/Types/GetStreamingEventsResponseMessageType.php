<?php
/**
 * Contains GetStreamingEventsResponseMessageType.
 */

namespace jamesiarmes\EWS\Types;

use jamesiarmes\EWS\EWSType;

/**
 * Represents the status and result of a single GetStreamingEvents operation
 * request.
 *
 * @package jamesiarmes\EWS\Types
 *
 * @todo Extend ResponseMessageType.
 */
class GetStreamingEventsResponseMessageType extends EWSType
{
    /**
     * Provides a text description of the status of a streaming subscription.
     *
     * @since Exchange 2010 SP1
     *
     * @var ConnectionStatusType
     */
    public $ConnectionStatus;

    /**
     * Currently unused and reserved for future use.
     *
     * This element contains a value of 0.
     *
     * @since Exchange 2010 SP1
     *
     * @var integer
     */
    public $DescriptiveLinkKey;

    /**
     * Contains a list of subscription IDs that are invalid.
     *
     * @since Exchange 2010 SP1
     *
     * @var NonEmptyArrayOfSubscriptionIdsType
     */
    public $ErrorSubscriptionIds;

    /**
     * Provides a text description of the status of the response.
     *
     * @since Exchange 2010 SP1
     *
     * @var string
     */
    public $MessageText;

    /**
     * Provides additional error response information.
     *
     * @since Exchange 2010 SP1
     *
     * @var string
     *
     * @todo Determine if we can use SimpleXML or DOMDocument here.
     */
    public $MessageXml;

    /**
     * Contains a list of information about the subscription and the events that
     * have occurred since the last notification.
     *
     * @since Exchange 2010 SP1
     *
     * @var NonEmptyArrayOfNotificationsType
     */
    public $Notifications;

    /**
     * Describes the status of the response.
     *
     * @since Exchange 2010 SP1
     *
     * @var ResponseClassType
     */
    public $ResponseClass;

    /**
     * Provides an error code that identifies the specific error that the
     * request encountered.
     *
     * @since Exchange 2010 SP1
     *
     * @var ResponseCodeType
     */
    public $ResponseCode;
}
