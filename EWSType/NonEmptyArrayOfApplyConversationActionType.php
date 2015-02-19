<?php
/**
 * Contains EWSType_NonEmptyArrayOfApplyConversationActionType.
 */

/**
 * Defines a request to apply actions to items in a conversation.
 *
 * @package php-ews\Type
 */
class EWSType_NonEmptyArrayOfApplyConversationActionType extends EWSType
{
    /**
     * Contains a single action to be applied to a single conversation.
     *
     * @since Exchange 2010 SP1
     *
     * @var \jamesiarmes\PhpEws\Type\ConversationActionType
     */
    public $ConversationAction;
}
