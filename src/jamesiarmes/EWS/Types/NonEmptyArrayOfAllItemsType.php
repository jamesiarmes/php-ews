<?php
/**
 * Contains NonEmptyArrayOfAllItemsType.
 */

namespace jamesiarmes\EWS\Types;

use jamesiarmes\EWS\EWSType;

/**
 * Identifies items of any type for numerous requests.
 *
 * @package jamesiarmes\EWS\Types
 */
class NonEmptyArrayOfAllItemsType extends EWSType
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
     * Represents an Exchange calendar item.
     *
     * @since Exchange 2007
     *
     * @var CalendarItemType
     */
    public $CalendarItem;

    /**
     * Represents the response object that is used to cancel a meeting.
     *
     * @since Exchange 2007
     *
     * @var CancelCalendarItemType
     */
    public $CancelCalendarItem;

    /**
     * Represents an Exchange contact item.
     *
     * @since Exchange 2007
     *
     * @var ContactItemType
     */
    public $Contact;

    /**
     * Represents a Decline reply to a meeting request.
     *
     * @since Exchange 2007
     *
     * @var DeclineItemType
     */
    public $DeclineItem;

    /**
     * Represents a distribution list.
     *
     * @since Exchange 2007
     *
     * @var DistributionListType
     */
    public $DistributionList;

    /**
     * Contains an Exchange store item to forward to recipients.
     *
     * @since Exchange 2007
     *
     * @var ForwardItemType
     */
    public $ForwardItem;

    /**
     * Represents an item in the Exchange store.
     *
     * @since Exchange 2007
     *
     * @var ItemType
     */
    public $Item;

    /**
     * Represents a meeting cancellation in the Exchange store.
     *
     * @since Exchange 2007
     *
     * @var MeetingCancellationMessageType
     */
    public $MeetingCancellation;

    /**
     * Represents a meeting message in the Exchange store.
     *
     * @since Exchange 2007
     *
     * @var MeetingMessageType
     */
    public $MeetingMessage;

    /**
     * Represents a meeting request in the Exchange store.
     *
     * @since Exchange 2007
     *
     * @var MeetingRequestMessageType
     */
    public $MeetingRequest;

    /**
     * Represents a meeting response in the Exchange store.
     *
     * @since Exchange 2007
     *
     * @var MeetingResponseMessageType
     */
    public $MeetingResponse;

    /**
     * Represents an Exchange e-mail message.
     *
     * @since Exchange 2007
     *
     * @var MessageType
     */
    public $Message;

    /**
     * Contains a reply to a post item.
     *
     * @since Exchange 2007 SP1
     *
     * @var PostReplyItemType
     */
    public $PostReplyItem;

    /**
     * Represents a response object that is used to remove a meeting item when a
     * MeetingCancellation message is received.
     *
     * @since Exchange 2007
     *
     * @var RemoveItemType
     */
    public $RemoveItem;

    /**
     * Contains a reply to the sender and all identified recipients of an item
     * in the Exchange store.
     *
     * @since Exchange 2007
     *
     * @var ReplyAllToItemType
     */
    public $ReplyAllToItem;

    /**
     * Contains a reply to the sender of an item in the Exchange store.
     *
     * @since Exchange 2007
     *
     * @var ReplyToItemType
     */
    public $ReplyToItem;

    /**
     * Used to suppress read receipts.
     *
     * @since Exchange 2007
     *
     * @var SuppressReadReceiptType
     */
    public $SuppressReadReceipt;

    /**
     * Represents a task in the Exchange store.
     *
     * @since Exchange 2007
     *
     * @var TaskType
     */
    public $Task;

    /**
     * Represents a Tentative reply to a meeting request.
     *
     * @since Exchange 2007
     *
     * @var TentativelyAcceptItemType
     */
    public $TentativelyAcceptItem;
}
