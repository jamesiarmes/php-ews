<?php
/**
 * Contains \jamesiarmes\PhpEws\Response\FindConversationResponseMessageType.
 */

namespace jamesiarmes\PhpEws\Response;

/**
 * Defines a response to a FindConversation Operation request.
 *
 * @package php-ews\Response
 */
class FindConversationResponseMessageType extends ResponseMessageType
{
    /**
     * Contains an array of conversations.
     *
     * @since Exchange 2010 SP1
     *
     * @var EWSType_ArrayOfConversationsType
     */
    public $Conversations;
}
