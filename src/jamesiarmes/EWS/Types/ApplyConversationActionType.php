<?php
/**
 * Contains ApplyConversationActionType.
 */

namespace jamesiarmes\EWS\Types;

use jamesiarmes\EWS\EWSType;

/**
 * Defines a request to apply actions to items in a conversation.
 *
 * @package jamesiarmes\EWS\Types
 *
 * @todo Extend BaseRequestType.
 */
class ApplyConversationActionType extends EWSType
{
    /**
     * Contains a collection of conversations and the actions to apply to them.
     *
     * @since Exchange 2010 SP1
     *
     * @var NonEmptyArrayOfApplyConversationActionType
     */
    public $ConversationActions;
}
