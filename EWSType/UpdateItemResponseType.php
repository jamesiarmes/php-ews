<?php
/**
 * Contains EWSType_UpdateItemResponseType.
 */

/**
 * Defines a response to an UpdateItem request.
 *
 * @package php-ews\Types
 *
 * @todo Extend EWSType_BaseResponseMessageType.
 */
class EWSType_UpdateItemResponseType extends EWSType
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
