<?php
/**
 * Contains GetDelegateResponseMessageType.
 */

namespace jamesiarmes\EWS\Types;

use jamesiarmes\EWS\EWSType;

/**
 * Represents the status and result of a GetDelegate operation request.
 *
 * @package jamesiarmes\EWS\Types
 *
 * @todo Extend BaseDelegateResponseMessageType.
 */
class GetDelegateResponseMessageType extends EWSType
{
    /**
     * Defines how meeting requests are handled between the delegate and the
     * principal.
     *
     * @since Exchange 2007 SP1
     *
     * @var DeliverMeetingRequestsType
     */
    public $DeliverMeetingRequests;

    /**
     * Currently unused and reserved for future use.
     *
     * This element contains a value of 0.
     *
     * @since Exchange 2007 SP1
     *
     * @var integer
     */
    public $DescriptiveLinkKey;

    /**
     * Provides a text description of the status of the response.
     *
     * @since Exchange 2007 SP1
     *
     * @var string
     */
    public $MessageText;

    /**
     * Provides additional error response information.
     *
     * @since Exchange 2007 SP1
     *
     * @var string
     *
     * @todo Determine if we can use SimpleXML or DOMDocument here.
     */
    public $MessageXml;

    /**
     * Provides an error code that identifies the specific error that the
     * request encountered.
     *
     * @since Exchange 2007 SP1
     *
     * @var ResponseCodeType
     */
    public $ResponseCode;

    /**
     * Contains the response messages for an Exchange Web Services delegate
     * management request.
     *
     * @since Exchange 2007 SP1
     *
     * @var ArrayOfDelegateUserResponseMessageType
     */
    public $ResponseMessages;
}
