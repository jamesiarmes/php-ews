<?php
/**
 * Contains ArrayOfConversationsType.
 */

namespace jamesiarmes\EWS\Types;

use jamesiarmes\EWS\EWSType;

/**
 * Represents an array of conversations.
 *
 * @package jamesiarmes\EWS\Types
 */
class ArrayOfConversationsType extends EWSType
{
    /**
     * Represents a single conversation.
     *
     * @since Exchange 2010 SP1
     *
     * @var ConversationType
     */
    public $Conversation;
}
