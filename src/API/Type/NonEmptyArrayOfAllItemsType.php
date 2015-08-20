<?php

namespace jamesiarmes\PEWS\API\Type;

use jamesiarmes\PEWS\API\Type;

/**
 * Class representing NonEmptyArrayOfAllItemsType
 *
 *
 * XSD Type: NonEmptyArrayOfAllItemsType
 *
 * @method array getItem()
 * @method NonEmptyArrayOfAllItemsType setItem(array $item)
 * @method array getMessage()
 * @method NonEmptyArrayOfAllItemsType setMessage(array $message)
 * @method array getCalendarItem()
 * @method NonEmptyArrayOfAllItemsType setCalendarItem(array $calendarItem)
 * @method array getContact()
 * @method NonEmptyArrayOfAllItemsType setContact(array $contact)
 * @method array getDistributionList()
 * @method NonEmptyArrayOfAllItemsType setDistributionList(array $distributionList)
 * @method array getMeetingMessage()
 * @method NonEmptyArrayOfAllItemsType setMeetingMessage(array $meetingMessage)
 * @method array getMeetingRequest()
 * @method NonEmptyArrayOfAllItemsType setMeetingRequest(array $meetingRequest)
 * @method array getMeetingResponse()
 * @method NonEmptyArrayOfAllItemsType setMeetingResponse(array $meetingResponse)
 * @method array getMeetingCancellation()
 * @method NonEmptyArrayOfAllItemsType setMeetingCancellation(array $meetingCancellation)
 * @method array getTask()
 * @method NonEmptyArrayOfAllItemsType setTask(array $task)
 * @method array getPostItem()
 * @method NonEmptyArrayOfAllItemsType setPostItem(array $postItem)
 * @method array getReplyToItem()
 * @method NonEmptyArrayOfAllItemsType setReplyToItem(array $replyToItem)
 * @method array getForwardItem()
 * @method NonEmptyArrayOfAllItemsType setForwardItem(array $forwardItem)
 * @method array getReplyAllToItem()
 * @method NonEmptyArrayOfAllItemsType setReplyAllToItem(array $replyAllToItem)
 * @method array getAcceptItem()
 * @method NonEmptyArrayOfAllItemsType setAcceptItem(array $acceptItem)
 * @method array getTentativelyAcceptItem()
 * @method NonEmptyArrayOfAllItemsType setTentativelyAcceptItem(array $tentativelyAcceptItem)
 * @method array getDeclineItem()
 * @method NonEmptyArrayOfAllItemsType setDeclineItem(array $declineItem)
 * @method array getCancelCalendarItem()
 * @method NonEmptyArrayOfAllItemsType setCancelCalendarItem(array $cancelCalendarItem)
 * @method array getRemoveItem()
 * @method NonEmptyArrayOfAllItemsType setRemoveItem(array $removeItem)
 * @method array getSuppressReadReceipt()
 * @method NonEmptyArrayOfAllItemsType setSuppressReadReceipt(array $suppressReadReceipt)
 * @method array getPostReplyItem()
 * @method NonEmptyArrayOfAllItemsType setPostReplyItem(array $postReplyItem)
 * @method array getAcceptSharingInvitation()
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
