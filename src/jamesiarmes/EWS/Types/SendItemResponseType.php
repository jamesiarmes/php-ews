<?php
/**
 * Contains SendItemResponseType.
 */

namespace jamesiarmes\EWS\Types;

use jamesiarmes\EWS\EWSType;

/**
 * Defines a response to a SendItem request.
 *
 * @package jamesiarmes\EWS\Types
 *
 * @todo Extend BaseResponseMessageType.
 */
class SendItemResponseType extends EWSType
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
