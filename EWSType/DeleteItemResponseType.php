<?php
/**
 * Contains EWSType_DeleteItemResponseType.
 */

/**
 * Defines a response to a single DeleteItem request.
 *
 * @package php-ews\Types
 *
 * @todo Extend EWSType_BaseResponseMessageType.
 */
class EWSType_DeleteItemResponseType extends EWSType
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
