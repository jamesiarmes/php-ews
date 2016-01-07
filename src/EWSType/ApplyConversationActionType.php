<?php
/**
 * Contains EWSType_ApplyConversationActionType.
 */

/**
 * Defines a request to apply actions to items in a conversation.
 *
 * @package php-ews\Types
 *
 * @todo Extend EWSType_BaseRequestType.
 */
class EWSType_ApplyConversationActionType extends EWSType
{
    /**
     * Contains a collection of conversations and the actions to apply to them.
     *
     * @since Exchange 2010 SP1
     *
     * @var EWSType_NonEmptyArrayOfApplyConversationActionType
     */
    public $ConversationActions;
}
