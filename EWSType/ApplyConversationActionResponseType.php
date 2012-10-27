<?php
/**
 * Contains EWSType_ApplyConversationActionResponseType.
 */

/**
 * Defines a response to an ApplyConversationAction operation request.
 *
 * @package php-ews\Types
 *
 * @todo Extend EWSType_BaseResponseMessageType.
 */
class EWSType_ApplyConversationActionResponseType extends EWSType
{
    /**
     * Contains the response messages for an Exchange Web Services request.
     *
     * @since Exchange 2010 SP1
     *
     * @var EWSType_ArrayOfResponseMessagesType
     */
    public $ResponseMessages;
}
