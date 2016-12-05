<?php
/**
 * Contains \jamesiarmes\PhpEws\ArrayType\ArrayOfConversationsType.
 */

namespace jamesiarmes\PhpEws\ArrayType;

use \jamesiarmes\PhpEws\ArrayType;

/**
 * Represents an array of conversations.
 *
 * @package php-ews\Array
 */
class ArrayOfConversationsType extends ArrayType
{
    /**
     * Represents a single conversation.
     *
     * @since Exchange 2010 SP1
     *
     * @var \jamesiarmes\PhpEws\Type\ConversationType[]
     */
    public $Conversation = array();
}
