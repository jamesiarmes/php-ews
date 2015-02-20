<?php
/**
 * Contains DelegateUserResponseMessageType.
 */

namespace jamesiarmes\EWS\Types;

use jamesiarmes\EWS\EWSType;

/**
 * contains the response message for a single delegate user.
 *
 * @package jamesiarmes\EWS\Types
 */
class DelegateUserResponseMessageType extends EWSType
{
    /**
     * Identifies a single delegate that is returned in a delegate management
     * response.
     *
     * @since Exchange 2007 SP1
     *
     * @var DelegateUserType
     */
    public $DelegateUser;

    /**
     * Currently unused and is reserved for future use; contains a value of 0.
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
}
