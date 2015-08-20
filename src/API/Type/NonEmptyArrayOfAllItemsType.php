<?php

namespace jamesiarmes\PEWS\API\Type;

use jamesiarmes\PEWS\API\Type;

/**
 * Class representing NonEmptyArrayOfAllItemsType
 *
 *
 * XSD Type: NonEmptyArrayOfAllItemsType
 *
 * @method NonEmptyArrayOfAllItemsType getItem()
 * @method NonEmptyArrayOfAllItemsType setItem(array $item)
 * @method NonEmptyArrayOfAllItemsType getMessage()
 * @method NonEmptyArrayOfAllItemsType setMessage(array $message)
 * @method NonEmptyArrayOfAllItemsType getCalendarItem()
 * @method NonEmptyArrayOfAllItemsType setCalendarItem(array $calendarItem)
 * @method NonEmptyArrayOfAllItemsType getContact()
 * @method NonEmptyArrayOfAllItemsType setContact(array $contact)
 * @method NonEmptyArrayOfAllItemsType getDistributionList()
 * @method NonEmptyArrayOfAllItemsType setDistributionList(array $distributionList)
 * @method NonEmptyArrayOfAllItemsType getMeetingMessage()
 * @method NonEmptyArrayOfAllItemsType setMeetingMessage(array $meetingMessage)
 * @method NonEmptyArrayOfAllItemsType getMeetingRequest()
 * @method NonEmptyArrayOfAllItemsType setMeetingRequest(array $meetingRequest)
 * @method NonEmptyArrayOfAllItemsType getMeetingResponse()
 * @method NonEmptyArrayOfAllItemsType setMeetingResponse(array $meetingResponse)
 * @method NonEmptyArrayOfAllItemsType getMeetingCancellation()
 * @method NonEmptyArrayOfAllItemsType setMeetingCancellation(array $meetingCancellation)
 * @method NonEmptyArrayOfAllItemsType getTask()
 * @method NonEmptyArrayOfAllItemsType setTask(array $task)
 * @method NonEmptyArrayOfAllItemsType getPostItem()
 * @method NonEmptyArrayOfAllItemsType setPostItem(array $postItem)
 * @method NonEmptyArrayOfAllItemsType getReplyToItem()
 * @method NonEmptyArrayOfAllItemsType setReplyToItem(array $replyToItem)
 * @method NonEmptyArrayOfAllItemsType getForwardItem()
 * @method NonEmptyArrayOfAllItemsType setForwardItem(array $forwardItem)
 * @method NonEmptyArrayOfAllItemsType getReplyAllToItem()
 * @method NonEmptyArrayOfAllItemsType setReplyAllToItem(array $replyAllToItem)
 * @method NonEmptyArrayOfAllItemsType getAcceptItem()
 * @method NonEmptyArrayOfAllItemsType setAcceptItem(array $acceptItem)
 * @method NonEmptyArrayOfAllItemsType getTentativelyAcceptItem()
 * @method NonEmptyArrayOfAllItemsType setTentativelyAcceptItem(array $tentativelyAcceptItem)
 * @method NonEmptyArrayOfAllItemsType getDeclineItem()
 * @method NonEmptyArrayOfAllItemsType setDeclineItem(array $declineItem)
 * @method NonEmptyArrayOfAllItemsType getCancelCalendarItem()
 * @method NonEmptyArrayOfAllItemsType setCancelCalendarItem(array $cancelCalendarItem)
 * @method NonEmptyArrayOfAllItemsType getRemoveItem()
 * @method NonEmptyArrayOfAllItemsType setRemoveItem(array $removeItem)
 * @method NonEmptyArrayOfAllItemsType getSuppressReadReceipt()
 * @method NonEmptyArrayOfAllItemsType setSuppressReadReceipt(array $suppressReadReceipt)
 * @method NonEmptyArrayOfAllItemsType getPostReplyItem()
 * @method NonEmptyArrayOfAllItemsType setPostReplyItem(array $postReplyItem)
 * @method NonEmptyArrayOfAllItemsType getAcceptSharingInvitation()
 * @method NonEmptyArrayOfAllItemsType setAcceptSharingInvitation(array $acceptSharingInvitation)
 */
class NonEmptyArrayOfAllItemsType extends Type
{

    /**
     * @property \jamesiarmes\PEWS\API\Type\ItemType[] $item
     */
    protected $item = null;

    /**
     * @property \jamesiarmes\PEWS\API\Type\MessageType[] $message
     */
    protected $message = null;

    /**
     * @property \jamesiarmes\PEWS\API\Type\CalendarItemType[] $calendarItem
     */
    protected $calendarItem = null;

    /**
     * @property \jamesiarmes\PEWS\API\Type\ContactItemType[] $contact
     */
    protected $contact = null;

    /**
     * @property \jamesiarmes\PEWS\API\Type\DistributionListType[] $distributionList
     */
    protected $distributionList = null;

    /**
     * @property \jamesiarmes\PEWS\API\Type\MeetingMessageType[] $meetingMessage
     */
    protected $meetingMessage = null;

    /**
     * @property \jamesiarmes\PEWS\API\Type\MeetingRequestMessageType[] $meetingRequest
     */
    protected $meetingRequest = null;

    /**
     * @property \jamesiarmes\PEWS\API\Type\MeetingResponseMessageType[]
     * $meetingResponse
     */
    protected $meetingResponse = null;

    /**
     * @property \jamesiarmes\PEWS\API\Type\MeetingCancellationMessageType[]
     * $meetingCancellation
     */
    protected $meetingCancellation = null;

    /**
     * @property \jamesiarmes\PEWS\API\Type\TaskType[] $task
     */
    protected $task = null;

    /**
     * @property \jamesiarmes\PEWS\API\Type\PostItemType[] $postItem
     */
    protected $postItem = null;

    /**
     * @property \jamesiarmes\PEWS\API\Type\ReplyToItemType[] $replyToItem
     */
    protected $replyToItem = null;

    /**
     * @property \jamesiarmes\PEWS\API\Type\ForwardItemType[] $forwardItem
     */
    protected $forwardItem = null;

    /**
     * @property \jamesiarmes\PEWS\API\Type\ReplyAllToItemType[] $replyAllToItem
     */
    protected $replyAllToItem = null;

    /**
     * @property \jamesiarmes\PEWS\API\Type\AcceptItemType[] $acceptItem
     */
    protected $acceptItem = null;

    /**
     * @property \jamesiarmes\PEWS\API\Type\TentativelyAcceptItemType[]
     * $tentativelyAcceptItem
     */
    protected $tentativelyAcceptItem = null;

    /**
     * @property \jamesiarmes\PEWS\API\Type\DeclineItemType[] $declineItem
     */
    protected $declineItem = null;

    /**
     * @property \jamesiarmes\PEWS\API\Type\CancelCalendarItemType[]
     * $cancelCalendarItem
     */
    protected $cancelCalendarItem = null;

    /**
     * @property \jamesiarmes\PEWS\API\Type\RemoveItemType[] $removeItem
     */
    protected $removeItem = null;

    /**
     * @property \jamesiarmes\PEWS\API\Type\SuppressReadReceiptType[]
     * $suppressReadReceipt
     */
    protected $suppressReadReceipt = null;

    /**
     * @property \jamesiarmes\PEWS\API\Type\PostReplyItemType[] $postReplyItem
     */
    protected $postReplyItem = null;

    /**
     * @property \jamesiarmes\PEWS\API\Type\AcceptSharingInvitationType[]
     * $acceptSharingInvitation
     */
    protected $acceptSharingInvitation = null;


}

