<?php
/**
 * Contains EWSType_AddDelegateResponseMessageType.
 */

/**
 * Contains the status and result of an AddDelegate Operation request.
 *
 * @package php-ews\Types
 */
class EWSType_AddDelegateResponseMessageType extends EWSType
{
    /**
     * Contains the response messages for an Exchange Web Services delegate
     * management request.
     *
     * @since Exchnage 2007 SP1
     *
     * @var EWSType_ArrayOfDelegateUserResponseMessageType
     */
    public $ResponseMessages;

    /**
     * Provides a text description of the status of the response.
     *
     * @since Exchnage 2007 SP1
     *
     * @var string
     */
    public $MessageText;

    /**
     * Provides an error code that identifies the specific error that the
     * request encountered.
     *
     * @since Exchnage 2007 SP1
     *
     * @var EWSType_ResponseCodeType
     */
    public $ResponseCode;

    /**
     * Currently unused and is reserved for future use. It contains a value of
     * 0.
     *
     * @since Exchnage 2007 SP1
     *
     * @var integer
     */
    public $DescriptiveLinkKey;

    /**
     * Provides additional error response information.
     *
     * @since Exchnage 2007 SP1
     *
     * @var string
     */
    public $MessageXml;
}
