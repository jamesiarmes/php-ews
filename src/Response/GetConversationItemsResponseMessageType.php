<?php
/**
 * Contains \jamesiarmes\PhpEws\Response\GetConversationItemsResponseMessageType.
 */

namespace jamesiarmes\PhpEws\Response;

/**
 * Defines the response message for a GetConversationItems request.
 *
 * @package php-ews\Response
 */
class GetConversationItemsResponseMessageType extends ResponseMessageType
{
    /**
     * Represents a single conversation.
     *
     * @since Exchange 2013
     *
     * @var \jamesiarmes\PhpEws\Type\ConversationResponseType
     */
    public $Conversation;
}
