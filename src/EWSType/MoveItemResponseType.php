<?php
/**
 * Contains EWSType_MoveItemResponseType.
 */

/**
 * Defines a response to a MoveItem request.
 *
 * @package php-ews\Types
 *
 * @@todo Extend EWSType_BaseResponseMessageType.
 */
class EWSType_MoveItemResponseType extends EWSType
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
