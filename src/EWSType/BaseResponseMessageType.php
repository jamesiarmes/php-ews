<?php
/**
 * Contains EWSType_BaseResponseMessageType.
 */

/**
 * Base class for responses.
 *
 * @package php-ews\Types
 */
class EWSType_BaseResponseMessageType extends EWSType
{
    /**
     * Contains the response messages for an Exchange Web Services request.
     *
     * @since Exchange 2007
     *
     * @var EWSType_ArrayOfResponseMessagesType
     */
    public $ResponseMessages;
}
