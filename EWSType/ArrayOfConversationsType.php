<?php
/**
 * Contains EWSType_ArrayOfConversationsType.
 */

/**
 * Represents an array of conversations.
 *
 * @package php-ews\Types
 */
class EWSType_ArrayOfConversationsType extends EWSType
{
    /**
     * Represents a single conversation.
     *
     * @since Exchange 2010 SP1
     *
     * @var EWSType_ConversationType
     */
    public $Conversation;
}
