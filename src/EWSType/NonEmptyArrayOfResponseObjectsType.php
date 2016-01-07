<?php
/**
 * Contains EWSType_NonEmptyArrayOfResponseObjectsType.
 */

/**
 * Represents a collection of all the response objects that are associated with
 * an item in the Exchange store.
 *
 * @package php-ews\Types
 */
class EWSType_NonEmptyArrayOfResponseObjectsType extends EWSType
{
    /**
     * Represents an Accept reply to a meeting request.
     *
     * @since Exchange 2007
     *
     * @var EWSType_AcceptItemType
     */
    public $AcceptItem;

    /**
     * Used to accept an invitation that allows access to another user’s
     * calendar or contacts data.
     *
     * @since Exchange 2010
     *
     * @var EWSType_AcceptSharingInvitationType
     */
    public $AcceptSharingInvitation;

    /**
     * Represents the response object used to cancel a meeting.
     *
     * @since Exchange 2007
     *
     * @var EWSType_CancelCalendarItemType
     */
    public $CancelCalendarItem;

    /**
     * Represents a Decline reply to a meeting request.
     *
     * @since Exchange 2007
     *
     * @var EWSType_DeclineItemType
     */
    public $DeclineItem;

    /**
     * Contains an Exchange store item to forward to recipients.
     *
     * @since Exchange 2007
     *
     * @var EWSType_ForwardItemType
     */
    public $ForwardItem;

    /**
     * Contains a reply to a post item.
     *
     * @since Exchange 2007 SP1
     *
     * @var EWSType_PostReplyItemType
     */
    public $PostReplyItem;

    /**
     * Removes an item from the Exchange store.
     *
     * @since Exchange 2007
     *
     * @var EWSType_RemoveItemType
     */
    public $RemoveItem;

    /**
     * Contains a reply to all identified recipients of an item in the Exchange
     * store.
     *
     * @since Exchange 2007
     *
     * @var EWSType_ReplyAllToItemType
     */
    public $ReplyAllToItem;

    /**
     * Contains a reply to the creator of an item in the Exchange store.
     *
     * @since Exchange 2007
     *
     * @var EWSType_ReplyToItemType
     */
    public $ReplyToItem;

    /**
     * Used to suppress read receipt requests.
     *
     * @since Exchange 2007
     *
     * @var EWSType_SuppressReadReceiptType
     */
    public $SuppressReadReceipt;

    /**
     * Represents a Tentative reply to a meeting request.
     *
     * @since Exchange 2007
     *
     * @var EWSType_TentativelyAcceptItemType
     */
    public $TentativelyAcceptItem;
}
