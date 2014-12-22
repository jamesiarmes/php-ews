<?php
/**
 * Contains EWSType_RemoveDelegateResponseMessageType.
 */

/**
 * Defines the status and result of a RemoveDelegate Operation request.
 *
 * @package php-ews\Types
 *
 * @todo Extend EWSType_BaseDelegateResponseMessageType.
 */
class EWSType_RemoveDelegateResponseMessageType extends EWSType
{
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
     * @var EWSType_ResponseCodeType
     */
    public $ResponseCode;

    /**
     * Contains the response messages for an Exchange Web Services delegate
     * management request.
     *
     * @since Exchange 2007 SP1
     *
     * @var EWSType_ArrayOfDelegateUserResponseMessageType
     */
    public $ResponseMessages;
}
