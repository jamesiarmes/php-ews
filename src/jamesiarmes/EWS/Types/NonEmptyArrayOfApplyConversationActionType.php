<?php
/**
 * Contains NonEmptyArrayOfApplyConversationActionType.
 */

namespace jamesiarmes\EWS\Types;

use jamesiarmes\EWS\EWSType;

/**
 * Defines a request to apply actions to items in a conversation.
 *
 * @package jamesiarmes\EWS\Types
 */
class NonEmptyArrayOfApplyConversationActionType extends EWSType
{
    /**
     * Contains a single action to be applied to a single conversation.
     *
     * @since Exchange 2010 SP1
     *
     * @var ConversationActionType
     */
    public $ConversationAction;
}
