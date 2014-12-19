<?php
/**
 * Contains EWSType_FindConversationType.
 */

/**
 * Defines a request to find conversations in a mailbox.
 *
 * @package php-ews\Types
 *
 * @todo Extend EWSType_BaseRequestType.
 */
class EWSType_FindConversationType extends EWSType
{
    /**
     * Identifies the property set to return in a FindConversation operation
     * response.
     *
     * @since Exchange 2013
     *
     * @var EWSType_ConversationShapeType
     */
    public $ConversationShape;

    /**
     * Describes how paged conversation information is returned.
     *
     * @since Exchange 2010 SP1
     *
     * @var EWSType_IndexedPageViewType
     */
    public $IndexedPageItemView;

    /**
     * Specifies whether a search or fetch for a conversation should span either
     * the primary mailbox, archive mailbox, or both the primary and archive
     * mailbox.
     *
     * @since Exchange 2013
     *
     * @var EWSType_MailboxSearchLocationType
     */
    public $MailboxScope;

    /**
     * Identifies the folder to search for conversations.
     *
     * @since Exchange 2010 SP1
     *
     * @var EWSType_TargetFolderIdType
     */
    public $ParentFolderId;

    /**
     * Specifies a mailbox query string based on Advanced Query Syntax (AQS).
     *
     * @since Exchange 2013
     *
     * @var EWSType_QueryStringType
     */
    public $QueryString;

    /**
     * Specifies the condition that is used to identify the end of a search, the
     * starting index of a search, the maximum entries to return, and the search
     * directions for a FindItem or FindConversation search.
     *
     * @since Exchange 2013
     *
     * @var EWSType_SeekToConditionPageViewType
     */
    public $SeekToConditionPageItemView;

    /**
     * Defines how items are sorted in a FindConversation Operation request.
     *
     * The conversation:LastDeliveryTime property is the only property that is
     * supported for sorting when the FindConversation operation is used.
     *
     * @since Exchange 2010 SP1
     *
     * @var EWSType_NonEmptyArrayOfFieldOrdersType
     */
    public $SortOrder;

    /**
     * Identifies the types of sub-tree traversal.
     *
     * This attribute is optional.
     *
     * @since Exchange 2013
     *
     * @var EWSType_TraversalType
     */
    public $Traversal;

    /**
     * Identifies the types view filters.
     *
     * This attribute is optional.
     *
     * @since Exchange 2013
     *
     * @var EWSType_ViewFilterType
     */
    public $ViewFilter;
}
