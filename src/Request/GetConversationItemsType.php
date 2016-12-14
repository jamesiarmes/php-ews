<?php
/**
 * Contains \jamesiarmes\PhpEws\Request\GetConversationItemsType.
 */

namespace jamesiarmes\PhpEws\Request;

/**
 * Defines a request to get a set of items that are related by being in the same
 * conversation.
 *
 * @package php-ews\Request
 */
class GetConversationItemsType extends BaseRequestType
{
    /**
     * Contains an array of conversations to get items for.
     *
     * @since Exchange 2013
     *
     * @var \jamesiarmes\PhpEws\ArrayType\ArrayOfConversationsType
     */
    public $Conversations;

    /**
     * Identifies a list of folders that are ignored when getting items in a
     * conversation.
     *
     * All conversation items in the ignored folders are not returned in the
     * response.
     *
     * @since Exchange 2013
     *
     * @var \jamesiarmes\PhpEws\ArrayType\NonEmptyArrayOfBaseFolderIdsType
     */
    public $FoldersToIgnore;

    /**
     * Identifies a set of properties to return.
     *
     * @since Exchange 2013
     *
     * @var \jamesiarmes\PhpEws\Type\ItemResponseShapeType
     */
    public $ItemShape;

    /**
     * Identifies whether a search or fetch for a conversation should span
     * either the primary mailbox, archive mailbox, or both the primary and
     * archive mailbox.
     *
     * @since Exchange 2013
     *
     * @var string
     *
     * @see \jamesiarmes\PhpEws\Enumeration\MailboxSearchLocationType
     */
    public $MailboxScope;

    /**
     * Identifies the maximum number of conversations items to return.
     *
     * @since Exchange 2013
     *
     * @var integer
     */
    public $MaxItemsToReturn;

    /**
     * Specifies the sort order used for the result.
     *
     * @since Exchange 2013
     *
     * @var string
     *
     * @see \jamesiarmes\PhpEws\Enumeration\ConversationNodeSortOrder
     */
    public $SortOrder;
}
