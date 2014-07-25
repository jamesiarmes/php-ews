<?php

namespace PhpEws\DataType;

use PhpEws\DataType;

/**
 * Definition of the NonEmptyArrayOfAllItemsType type
 */
class NonEmptyArrayOfAllItemsType extends DataType
{
    /**
     * Item property
     *
     * @var ItemType
     */
    public $Item;

    /**
     * Message property
     *
     * @var MessageType
     */
    public $Message;

    /**
     * CalendarItem property
     *
     * @var CalendarItemType
     */
    public $CalendarItem;

    /**
     * Contact property
     *
     * @var ContactItemType
     */
    public $Contact;

    /**
     * DistributionList property
     *
     * @var DistributionListType
     */
    public $DistributionList;

    /**
     * MeetingMessage property
     *
     * @var MeetingMessageType
     */
    public $MeetingMessage;

    /**
     * MeetingRequest property
     *
     * @var MeetingRequestMessageType
     */
    public $MeetingRequest;

    /**
     * MeetingResponse property
     *
     * @var MeetingResponseMessageType
     */
    public $MeetingResponse;

    /**
     * MeetingCancellation property
     *
     * @var MeetingCancellationMessageType
     */
    public $MeetingCancellation;

    /**
     * Task property
     *
     * @var TaskType
     */
    public $Task;

    /**
     * PostItem property
     *
     * @var PostItemType
     */
    public $PostItem;

    /**
     * ReplyToItem property
     *
     * @var ReplyToItemType
     */
    public $ReplyToItem;

    /**
     * ForwardItem property
     *
     * @var ForwardItemType
     */
    public $ForwardItem;

    /**
     * ReplyAllToItem property
     *
     * @var ReplyAllToItemType
     */
    public $ReplyAllToItem;

    /**
     * AcceptItem property
     *
     * @var AcceptItemType
     */
    public $AcceptItem;

    /**
     * TentativelyAcceptItem property
     *
     * @var TentativelyAcceptItemType
     */
    public $TentativelyAcceptItem;

    /**
     * DeclineItem property
     *
     * @var DeclineItemType
     */
    public $DeclineItem;

    /**
     * CancelCalendarItem property
     *
     * @var CancelCalendarItemType
     */
    public $CancelCalendarItem;

    /**
     * RemoveItem property
     *
     * @var RemoveItemType
     */
    public $RemoveItem;

    /**
     * SuppressReadReceipt property
     *
     * @var SuppressReadReceiptType
     */
    public $SuppressReadReceipt;

    /**
     * PostReplyItem property
     *
     * @var PostReplyItemType
     */
    public $PostReplyItem;
}
