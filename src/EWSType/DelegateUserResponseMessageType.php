<?php
/**
 * Contains EWSType_DelegateUserResponseMessageType.
 */

/**
 * contains the response message for a single delegate user.
 *
 * @package php-ews\Types
 */
class EWSType_DelegateUserResponseMessageType extends EWSType
{
    /**
     * Identifies a single delegate that is returned in a delegate management
     * response.
     *
     * @since Exchange 2007 SP1
     *
     * @var EWSType_DelegateUserType
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
     * @var EWSType_ResponseCodeType
     */
    public $ResponseCode;
}
