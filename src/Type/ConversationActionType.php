<?php
/**
 * Contains \jamesiarmes\PhpEws\Type\ConversationActionType.
 */

namespace jamesiarmes\PhpEws\Type;

use \jamesiarmes\PhpEws\Type;

/**
 * Represents a single action to be applied to a single conversation.
 *
 * @package php-ews\Type
 */
class ConversationActionType extends Type
{
    /**
     * Contains the action to perform on the conversation specified by the
     * ConversationId element.
     *
     * This element must be present.
     *
     * @since Exchange 2010 SP1
     *
     * @var string
     *
     * @see \jamesiarmes\PhpEws\Enumeration\ConversationActionTypeType
     */
    public $Action;

    /**
     * Contains a collection of strings that identify the categories to which
     * items in a conversation belong.
     *
     * @since Exchange 2010 SP1
     *
     * @var \jamesiarmes\PhpEws\ArrayType\ArrayOfStringsType
     */
    public $Categories;

    /**
     * Indicates the folder that is targeted for actions that use folders.
     *
     * This element must be present when copying, deleting, moving, and setting
     * read state on conversation items in a target folder.
     *
     * @since Exchange 2010 SP1
     *
     * @var \jamesiarmes\PhpEws\Type\TargetFolderIdType
     */
    public $ContextFolderId;

    /**
     * Contains the identifier of the conversation that will have the action
     * specified by the Action element applied to items in the conversation.
     *
     * This element must be present.
     *
     * @since Exchange 2010 SP1
     *
     * @var \jamesiarmes\PhpEws\Type\ItemIdType
     */
    public $ConversationId;

    /**
     * Contains the date and time that a conversation was last synchronized.
     *
     * This element must be present when trying to delete all items in a
     * conversation that were received up to the specified time.
     *
     * @since Exchange 2010 SP1
     *
     * @var string
     *
     * @todo Make a DateTime object.
     */
    public $ConversationLastSyncTime;

    /**
     * Indicates how items in a conversation are deleted.
     *
     * @since Exchange 2010 SP1
     *
     * @var string
     *
     * @see \jamesiarmes\PhpEws\Enumeration\DisposalType
     */
    public $DeleteType;

    /**
     * Indicates the destination folder for copy and move actions.
     *
     * @since Exchange 2010 SP1
     *
     * @var \jamesiarmes\PhpEws\Type\TargetFolderIdType
     */
    public $DestinationFolderId;

    /**
     * Specifies a flag that enables deletion for all new items in a
     * conversation.
     *
     * @since Exchange 2010 SP1
     *
     * @var boolean
     */
    public $EnableAlwaysDelete;

    /**
     * Indicates whether a message has been read.
     *
     * @since Exchange 2010 SP1
     *
     * @var boolean
     */
    public $IsRead;

    /**
     * Indicates whether the response is sent as soon as the action starts
     * processing on the server or whether the response is sent after the action
     * has completed.
     *
     * This element must be present for the response to be sent asynchronous to
     * the requested action.
     *
     * @since Exchange 2010 SP1
     *
     * @var boolean
     */
    public $ProcessRightAway;
}
