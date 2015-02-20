<?php
/**
 * Contains NonEmptyArrayOfResponseObjectsType.
 */

namespace jamesiarmes\EWS\Types;

use jamesiarmes\EWS\EWSType;

/**
 * Represents a collection of all the response objects that are associated with
 * an item in the Exchange store.
 *
 * @package jamesiarmes\EWS\Types
 */
class NonEmptyArrayOfResponseObjectsType extends EWSType
{
    /**
     * Represents an Accept reply to a meeting request.
     *
     * @since Exchange 2007
     *
     * @var AcceptItemType
     */
    public $AcceptItem;

    /**
     * Used to accept an invitation that allows access to another user’s
     * calendar or contacts data.
     *
     * @since Exchange 2010
     *
     * @var AcceptSharingInvitationType
     */
    public $AcceptSharingInvitation;

    /**
     * Represents the response object used to cancel a meeting.
     *
     * @since Exchange 2007
     *
     * @var CancelCalendarItemType
     */
    public $CancelCalendarItem;

    /**
     * Represents a Decline reply to a meeting request.
     *
     * @since Exchange 2007
     *
     * @var DeclineItemType
     */
    public $DeclineItem;

    /**
     * Contains an Exchange store item to forward to recipients.
     *
     * @since Exchange 2007
     *
     * @var ForwardItemType
     */
    public $ForwardItem;

    /**
     * Contains a reply to a post item.
     *
     * @since Exchange 2007 SP1
     *
     * @var PostReplyItemType
     */
    public $PostReplyItem;

    /**
     * Removes an item from the Exchange store.
     *
     * @since Exchange 2007
     *
     * @var RemoveItemType
     */
    public $RemoveItem;

    /**
     * Contains a reply to all identified recipients of an item in the Exchange
     * store.
     *
     * @since Exchange 2007
     *
     * @var ReplyAllToItemType
     */
    public $ReplyAllToItem;

    /**
     * Contains a reply to the creator of an item in the Exchange store.
     *
     * @since Exchange 2007
     *
     * @var ReplyToItemType
     */
    public $ReplyToItem;

    /**
     * Used to suppress read receipt requests.
     *
     * @since Exchange 2007
     *
     * @var SuppressReadReceiptType
     */
    public $SuppressReadReceipt;

    /**
     * Represents a Tentative reply to a meeting request.
     *
     * @since Exchange 2007
     *
     * @var TentativelyAcceptItemType
     */
    public $TentativelyAcceptItem;
}
