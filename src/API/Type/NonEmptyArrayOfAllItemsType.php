<?php

namespace jamesiarmes\PEWS\API\Type;

use jamesiarmes\PEWS\API\Type;

/**
 * Class representing NonEmptyArrayOfAllItemsType
 *
 *
 * XSD Type: NonEmptyArrayOfAllItemsType
 *
 * @method NonEmptyArrayOfAllItemsType addItem(ItemType $item)
 * @method ItemType[] getItem()
 * @method NonEmptyArrayOfAllItemsType setItem(array $item)
 * @method NonEmptyArrayOfAllItemsType addMessage(MessageType $message)
 * @method MessageType[] getMessage()
 * @method NonEmptyArrayOfAllItemsType setMessage(array $message)
 * @method NonEmptyArrayOfAllItemsType addCalendarItem(CalendarItemType $calendarItem)
 * @method CalendarItemType[] getCalendarItem()
 * @method NonEmptyArrayOfAllItemsType setCalendarItem(array $calendarItem)
 * @method NonEmptyArrayOfAllItemsType addContact(ContactItemType $contact)
 * @method ContactItemType[] getContact()
 * @method NonEmptyArrayOfAllItemsType setContact(array $contact)
 * @method NonEmptyArrayOfAllItemsType addDistributionList(DistributionListType $distributionList)
 * @method DistributionListType[] getDistributionList()
 * @method NonEmptyArrayOfAllItemsType setDistributionList(array $distributionList)
 * @method NonEmptyArrayOfAllItemsType addMeetingMessage(MeetingMessageType $meetingMessage)
 * @method MeetingMessageType[] getMeetingMessage()
 * @method NonEmptyArrayOfAllItemsType setMeetingMessage(array $meetingMessage)
 * @method NonEmptyArrayOfAllItemsType addMeetingRequest(MeetingRequestMessageType $meetingRequest)
 * @method MeetingRequestMessageType[] getMeetingRequest()
 * @method NonEmptyArrayOfAllItemsType setMeetingRequest(array $meetingRequest)
 * @method NonEmptyArrayOfAllItemsType addMeetingResponse(MeetingResponseMessageType $meetingResponse)
 * @method MeetingResponseMessageType[] getMeetingResponse()
 * @method NonEmptyArrayOfAllItemsType setMeetingResponse(array $meetingResponse)
 * @method NonEmptyArrayOfAllItemsType addMeetingCancellation(MeetingCancellationMessageType $meetingCancellation)
 * @method MeetingCancellationMessageType[] getMeetingCancellation()
 * @method NonEmptyArrayOfAllItemsType setMeetingCancellation(array $meetingCancellation)
 * @method NonEmptyArrayOfAllItemsType addTask(TaskType $task)
 * @method TaskType[] getTask()
 * @method NonEmptyArrayOfAllItemsType setTask(array $task)
 * @method NonEmptyArrayOfAllItemsType addPostItem(PostItemType $postItem)
 * @method PostItemType[] getPostItem()
 * @method NonEmptyArrayOfAllItemsType setPostItem(array $postItem)
 * @method NonEmptyArrayOfAllItemsType addReplyToItem(ReplyToItemType $replyToItem)
 * @method ReplyToItemType[] getReplyToItem()
 * @method NonEmptyArrayOfAllItemsType setReplyToItem(array $replyToItem)
 * @method NonEmptyArrayOfAllItemsType addForwardItem(ForwardItemType $forwardItem)
 * @method ForwardItemType[] getForwardItem()
 * @method NonEmptyArrayOfAllItemsType setForwardItem(array $forwardItem)
 * @method NonEmptyArrayOfAllItemsType addReplyAllToItem(ReplyAllToItemType $replyAllToItem)
 * @method ReplyAllToItemType[] getReplyAllToItem()
 * @method NonEmptyArrayOfAllItemsType setReplyAllToItem(array $replyAllToItem)
 * @method NonEmptyArrayOfAllItemsType addAcceptItem(AcceptItemType $acceptItem)
 * @method AcceptItemType[] getAcceptItem()
 * @method NonEmptyArrayOfAllItemsType setAcceptItem(array $acceptItem)
 * @method NonEmptyArrayOfAllItemsType addTentativelyAcceptItem(TentativelyAcceptItemType $tentativelyAcceptItem)
 * @method TentativelyAcceptItemType[] getTentativelyAcceptItem()
 * @method NonEmptyArrayOfAllItemsType setTentativelyAcceptItem(array $tentativelyAcceptItem)
 * @method NonEmptyArrayOfAllItemsType addDeclineItem(DeclineItemType $declineItem)
 * @method DeclineItemType[] getDeclineItem()
 * @method NonEmptyArrayOfAllItemsType setDeclineItem(array $declineItem)
 * @method NonEmptyArrayOfAllItemsType addCancelCalendarItem(CancelCalendarItemType $cancelCalendarItem)
 * @method CancelCalendarItemType[] getCancelCalendarItem()
 * @method NonEmptyArrayOfAllItemsType setCancelCalendarItem(array $cancelCalendarItem)
 * @method NonEmptyArrayOfAllItemsType addRemoveItem(RemoveItemType $removeItem)
 * @method RemoveItemType[] getRemoveItem()
 * @method NonEmptyArrayOfAllItemsType setRemoveItem(array $removeItem)
 * @method NonEmptyArrayOfAllItemsType addSuppressReadReceipt(SuppressReadReceiptType $suppressReadReceipt)
 * @method SuppressReadReceiptType[] getSuppressReadReceipt()
 * @method NonEmptyArrayOfAllItemsType setSuppressReadReceipt(array $suppressReadReceipt)
 * @method NonEmptyArrayOfAllItemsType addPostReplyItem(PostReplyItemType $postReplyItem)
 * @method PostReplyItemType[] getPostReplyItem()
 * @method NonEmptyArrayOfAllItemsType setPostReplyItem(array $postReplyItem)
 * @method NonEmptyArrayOfAllItemsType addAcceptSharingInvitation(AcceptSharingInvitationType $acceptSharingInvitation)
 * @method AcceptSharingInvitationType[] getAcceptSharingInvitation()
 * @method NonEmptyArrayOfAllItemsType setAcceptSharingInvitation(array $acceptSharingInvitation)
 */
class NonEmptyArrayOfAllItemsType extends Type
{

    /**
     * @var \jamesiarmes\PEWS\API\Type\ItemType[]
     */
    protected $item = null;

    /**
     * @var \jamesiarmes\PEWS\API\Type\MessageType[]
     */
    protected $message = null;

    /**
     * @var \jamesiarmes\PEWS\API\Type\CalendarItemType[]
     */
    protected $calendarItem = null;

    /**
     * @var \jamesiarmes\PEWS\API\Type\ContactItemType[]
     */
    protected $contact = null;

    /**
     * @var \jamesiarmes\PEWS\API\Type\DistributionListType[]
     */
    protected $distributionList = null;

    /**
     * @var \jamesiarmes\PEWS\API\Type\MeetingMessageType[]
     */
    protected $meetingMessage = null;

    /**
     * @var \jamesiarmes\PEWS\API\Type\MeetingRequestMessageType[]
     */
    protected $meetingRequest = null;

    /**
     * @var \jamesiarmes\PEWS\API\Type\MeetingResponseMessageType[]
     */
    protected $meetingResponse = null;

    /**
     * @var \jamesiarmes\PEWS\API\Type\MeetingCancellationMessageType[]
     */
    protected $meetingCancellation = null;

    /**
     * @var \jamesiarmes\PEWS\API\Type\TaskType[]
     */
    protected $task = null;

    /**
     * @var \jamesiarmes\PEWS\API\Type\PostItemType[]
     */
    protected $postItem = null;

    /**
     * @var \jamesiarmes\PEWS\API\Type\ReplyToItemType[]
     */
    protected $replyToItem = null;

    /**
     * @var \jamesiarmes\PEWS\API\Type\ForwardItemType[]
     */
    protected $forwardItem = null;

    /**
     * @var \jamesiarmes\PEWS\API\Type\ReplyAllToItemType[]
     */
    protected $replyAllToItem = null;

    /**
     * @var \jamesiarmes\PEWS\API\Type\AcceptItemType[]
     */
    protected $acceptItem = null;

    /**
     * @var \jamesiarmes\PEWS\API\Type\TentativelyAcceptItemType[]
     */
    protected $tentativelyAcceptItem = null;

    /**
     * @var \jamesiarmes\PEWS\API\Type\DeclineItemType[]
     */
    protected $declineItem = null;

    /**
     * @var \jamesiarmes\PEWS\API\Type\CancelCalendarItemType[]
     */
    protected $cancelCalendarItem = null;

    /**
     * @var \jamesiarmes\PEWS\API\Type\RemoveItemType[]
     */
    protected $removeItem = null;

    /**
     * @var \jamesiarmes\PEWS\API\Type\SuppressReadReceiptType[]
     */
    protected $suppressReadReceipt = null;

    /**
     * @var \jamesiarmes\PEWS\API\Type\PostReplyItemType[]
     */
    protected $postReplyItem = null;

    /**
     * @var \jamesiarmes\PEWS\API\Type\AcceptSharingInvitationType[]
     */
    protected $acceptSharingInvitation = null;
}
