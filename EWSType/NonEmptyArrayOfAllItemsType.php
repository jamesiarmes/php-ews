<?php
/**
 * Contains EWSType_NonEmptyArrayOfAllItemsType.
 */

/**
 * Identifies items of any type for numerous requests.
 *
 * @package php-ews\Types
 */
class EWSType_NonEmptyArrayOfAllItemsType extends EWSType
{
    /**
     * Item property
     *
     * @var EWSType_ItemType
     */
    public $Item;

    /**
     * Message property
     *
     * @var EWSType_MessageType
     */
    public $Message;

    /**
     * Represents an Exchange calendar item.
     *
     * @since Exchnage 2007
     *
     * @var EWSType_CalendarItemType
     */
    public $CalendarItem;

    /**
     * Contact property
     *
     * @var EWSType_ContactItemType
     */
    public $Contact;

    /**
     * DistributionList property
     *
     * @var EWSType_DistributionListType
     */
    public $DistributionList;

    /**
     * MeetingMessage property
     *
     * @var EWSType_MeetingMessageType
     */
    public $MeetingMessage;

    /**
     * MeetingRequest property
     *
     * @var EWSType_MeetingRequestMessageType
     */
    public $MeetingRequest;

    /**
     * MeetingResponse property
     *
     * @var EWSType_MeetingResponseMessageType
     */
    public $MeetingResponse;

    /**
     * MeetingCancellation property
     *
     * @var EWSType_MeetingCancellationMessageType
     */
    public $MeetingCancellation;

    /**
     * Task property
     *
     * @var EWSType_TaskType
     */
    public $Task;

    /**
     * PostItem property
     *
     * @var EWSType_PostItemType
     */
    public $PostItem;

    /**
     * ReplyToItem property
     *
     * @var EWSType_ReplyToItemType
     */
    public $ReplyToItem;

    /**
     * ForwardItem property
     *
     * @var EWSType_ForwardItemType
     */
    public $ForwardItem;

    /**
     * ReplyAllToItem property
     *
     * @var EWSType_ReplyAllToItemType
     */
    public $ReplyAllToItem;

    /**
     * AcceptItem property
     *
     * @var EWSType_AcceptItemType
     */
    public $AcceptItem;

    /**
     * TentativelyAcceptItem property
     *
     * @var EWSType_TentativelyAcceptItemType
     */
    public $TentativelyAcceptItem;

    /**
     * DeclineItem property
     *
     * @var EWSType_DeclineItemType
     */
    public $DeclineItem;

    /**
     * CancelCalendarItem property
     *
     * @var EWSType_CancelCalendarItemType
     */
    public $CancelCalendarItem;

    /**
     * RemoveItem property
     *
     * @var EWSType_RemoveItemType
     */
    public $RemoveItem;

    /**
     * SuppressReadReceipt property
     *
     * @var EWSType_SuppressReadReceiptType
     */
    public $SuppressReadReceipt;

    /**
     * PostReplyItem property
     *
     * @var EWSType_PostReplyItemType
     */
    public $PostReplyItem;
}
