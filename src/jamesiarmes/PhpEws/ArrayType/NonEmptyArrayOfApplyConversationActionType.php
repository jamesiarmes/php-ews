<?php
/**
 * Contains \jamesiarmes\PhpEws\ArrayType\NonEmptyArrayOfApplyConversationActionType.
 */

namespace jamesiarmes\PhpEws\ArrayType;

use \jamesiarmes\PhpEws\ArrayType;

/**
 * Defines a request to apply actions to items in a conversation.
 *
 * @package php-ews\Array
 */
class NonEmptyArrayOfApplyConversationActionType extends ArrayType
{
    /**
     * Contains a single action to be applied to a single conversation.
     *
     * @since Exchange 2010 SP1
     *
     * @var \jamesiarmes\PhpEws\Type\ConversationActionType[]
     */
    public $ConversationAction = array();
}
