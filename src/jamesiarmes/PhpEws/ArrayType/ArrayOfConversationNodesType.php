<?php
/**
 * Contains \jamesiarmes\PhpEws\ArrayType\ArrayOfConversationNodesType.
 */

namespace jamesiarmes\PhpEws\ArrayType;

use \jamesiarmes\PhpEws\ArrayType;

/**
 * Defines a collection of conversation nodes.
 *
 * @package php-ews\Array
 */
class ArrayOfConversationNodesType extends ArrayType
{
    /**
     * Specifies a node in a conversation.
     *
     * @since Exchange 2013
     *
     * @var \jamesiarmes\PhpEws\Type\ConversationNodeType
     */
    public $ConversationNode = array();
}
