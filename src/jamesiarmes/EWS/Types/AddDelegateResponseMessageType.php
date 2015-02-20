<?php
/**
 * Contains AddDelegateResponseMessageType.
 */

namespace jamesiarmes\EWS\Types;

use jamesiarmes\EWS\EWSType;

/**
 * Contains the status and result of an AddDelegate Operation request.
 *
 * @package jamesiarmes\EWS\Types
 *
 * @todo Extend BaseDelegateResponseMessageType.
 */
class AddDelegateResponseMessageType extends EWSType
{
    /**
     * Contains the response messages for an Exchange Web Services delegate
     * management request.
     *
     * @since Exchange 2007 SP1
     *
     * @var ArrayOfDelegateUserResponseMessageType
     */
    public $ResponseMessages;

    /**
     * Provides a text description of the status of the response.
     *
     * @since Exchange 2007 SP1
     *
     * @var string
     */
    public $MessageText;

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
     * Currently unused and is reserved for future use. It contains a value of
     * 0.
     *
     * @since Exchange 2007 SP1
     *
     * @var integer
     */
    public $DescriptiveLinkKey;

    /**
     * Provides additional error response information.
     *
     * @since Exchange 2007 SP1
     *
     * @var string
     */
    public $MessageXml;
}
