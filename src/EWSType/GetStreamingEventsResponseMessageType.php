<?php
/**
 * Contains EWSType_GetStreamingEventsResponseMessageType.
 */

/**
 * Represents the status and result of a single GetStreamingEvents operation
 * request.
 *
 * @package php-ews\Types
 *
 * @todo Extend EWSType_ResponseMessageType.
 */
class EWSType_GetStreamingEventsResponseMessageType extends EWSType
{
    /**
     * Provides a text description of the status of a streaming subscription.
     *
     * @since Exchange 2010 SP1
     *
     * @var EWSType_ConnectionStatusType
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
     * @var EWSType_NonEmptyArrayOfSubscriptionIdsType
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
     * @var EWSType_NonEmptyArrayOfNotificationsType
     */
    public $Notifications;

    /**
     * Describes the status of the response.
     *
     * @since Exchange 2010 SP1
     *
     * @var EWSType_ResponseClassType
     */
    public $ResponseClass;

    /**
     * Provides an error code that identifies the specific error that the
     * request encountered.
     *
     * @since Exchange 2010 SP1
     *
     * @var EWSType_ResponseCodeType
     */
    public $ResponseCode;
}
