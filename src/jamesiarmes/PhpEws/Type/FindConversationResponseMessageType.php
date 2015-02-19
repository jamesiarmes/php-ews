<?php
/**
 * Contains \jamesiarmes\PhpEws\Type\FindConversationResponseMessageType.
 */

namespace jamesiarmes\PhpEws\Type;

/**
 * Defines a response to a FindConversation Operation request.
 *
 * @package php-ews\Types
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
