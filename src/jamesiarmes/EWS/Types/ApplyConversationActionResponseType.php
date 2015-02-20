<?php
/**
 * Contains ApplyConversationActionResponseType.
 */

namespace jamesiarmes\EWS\Types;

use jamesiarmes\EWS\EWSType;

/**
 * Defines a response to an ApplyConversationAction operation request.
 *
 * @package jamesiarmes\EWS\Types
 *
 * @todo Extend BaseResponseMessageType.
 */
class ApplyConversationActionResponseType extends EWSType
{
    /**
     * Contains the response messages for an Exchange Web Services request.
     *
     * @since Exchange 2010 SP1
     *
     * @var ArrayOfResponseMessagesType
     */
    public $ResponseMessages;
}
