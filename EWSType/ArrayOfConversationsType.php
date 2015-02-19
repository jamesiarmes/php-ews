<?php
/**
 * Contains EWSType_ArrayOfConversationsType.
 */

/**
 * Represents an array of conversations.
 *
 * @package php-ews\Type
 */
class EWSType_ArrayOfConversationsType extends EWSType
{
    /**
     * Represents a single conversation.
     *
     * @since Exchange 2010 SP1
     *
     * @var \jamesiarmes\PhpEws\Type\ConversationType
     */
    public $Conversation;
}
