<?php
/**
 * Contains EWSType_NonEmptyArrayOfApplyConversationActionType.
 */

/**
 * Defines a request to apply actions to items in a conversation.
 *
 * @package php-ews\Types
 */
class EWSType_NonEmptyArrayOfApplyConversationActionType extends EWSType
{
    /**
     * Contains a single action to be applied to a single conversation.
     *
     * @since Exchange 2010 SP1
     *
     * @var EWSType_ConversationActionType
     */
    public $ConversationAction;
}
