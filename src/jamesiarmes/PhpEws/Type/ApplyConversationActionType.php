<?php
/**
 * Contains \jamesiarmes\PhpEws\Type\ApplyConversationActionType.
 */

namespace jamesiarmes\PhpEws\Type;

/**
 * Defines a request to apply actions to items in a conversation.
 *
 * @package php-ews\Types
 */
class ApplyConversationActionType extends BaseRequestType
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
