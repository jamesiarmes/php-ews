<?php
/**
 * Contains \jamesiarmes\PhpEws\Type\ConversationResponseType.
 */

namespace jamesiarmes\PhpEws\Type;

use jamesiarmes\PhpEws\Type;

/**
 * Defines a single conversation.
 *
 * @package php-ews\Type
 */
class ConversationResponseType extends Type
{
    /**
     * Indicates whether the conversation can be deleted.
     *
     * @since Exchange 2013
     *
     * @var boolean
     */
    public $CanDelete;

    /**
     * Contains the identifier of the conversation.
     *
     * @since Exchange 2013
     *
     * @var \jamesiarmes\PhpEws\Type\ItemIdType
     */
    public $ConversationId;

    /**
     * Specifies a collection of conversation nodes.
     *
     * @since Exchange 2013
     *
     * @var \jamesiarmes\PhpEws\ArrayType\ArrayOfConversationNodesType
     */
    public $ConversationNodes;

    /**
     * Specifies the synchronization state of a conversation.
     *
     * @since Exchange 2013
     *
     * @var string
     *
     * @todo Create a base64 class?
     */
    public $SyncState;
}
