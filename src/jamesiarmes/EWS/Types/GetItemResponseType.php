<?php
/**
 * Contains GetItemResponseType.
 */

namespace jamesiarmes\EWS\Types;

use jamesiarmes\EWS\EWSType;

/**
 * Defines a response to a GetItem request.
 *
 * @package jamesiarmes\EWS\Types
 *
 * @todo Extend BaseResponseMessageType.
 */
class GetItemResponseType extends EWSType
{
    /**
     * Contains the response messages for an Exchange Web Services request.
     *
     * @since Exchange 2007
     *
     * @var ArrayOfResponseMessagesType
     */
    public $ResponseMessages;
}
