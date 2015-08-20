<?php

namespace jamesiarmes\PEWS\API\Type;

use jamesiarmes\PEWS\API\Type;

/**
 * Class representing ArrayOfRealItemsType
 *
 *
 * XSD Type: ArrayOfRealItemsType
 *
 * @method ArrayOfRealItemsType addItem(ItemType $item)
 * @method ItemType[] getItem()
 * @method ArrayOfRealItemsType setItem(array $item)
 * @method ArrayOfRealItemsType addMessage(MessageType $message)
 * @method MessageType[] getMessage()
 * @method ArrayOfRealItemsType setMessage(array $message)
 * @method ArrayOfRealItemsType addCalendarItem(CalendarItemType $calendarItem)
 * @method CalendarItemType[] getCalendarItem()
 * @method ArrayOfRealItemsType setCalendarItem(array $calendarItem)
 * @method ArrayOfRealItemsType addContact(ContactItemType $contact)
 * @method ContactItemType[] getContact()
 * @method ArrayOfRealItemsType setContact(array $contact)
 * @method ArrayOfRealItemsType addDistributionList(DistributionListType $distributionList)
 * @method DistributionListType[] getDistributionList()
 * @method ArrayOfRealItemsType setDistributionList(array $distributionList)
 * @method ArrayOfRealItemsType addMeetingMessage(MeetingMessageType $meetingMessage)
 * @method MeetingMessageType[] getMeetingMessage()
 * @method ArrayOfRealItemsType setMeetingMessage(array $meetingMessage)
 * @method ArrayOfRealItemsType addMeetingRequest(MeetingRequestMessageType $meetingRequest)
 * @method MeetingRequestMessageType[] getMeetingRequest()
 * @method ArrayOfRealItemsType setMeetingRequest(array $meetingRequest)
 * @method ArrayOfRealItemsType addMeetingResponse(MeetingResponseMessageType $meetingResponse)
 * @method MeetingResponseMessageType[] getMeetingResponse()
 * @method ArrayOfRealItemsType setMeetingResponse(array $meetingResponse)
 * @method ArrayOfRealItemsType addMeetingCancellation(MeetingCancellationMessageType $meetingCancellation)
 * @method MeetingCancellationMessageType[] getMeetingCancellation()
 * @method ArrayOfRealItemsType setMeetingCancellation(array $meetingCancellation)
 * @method ArrayOfRealItemsType addTask(TaskType $task)
 * @method TaskType[] getTask()
 * @method ArrayOfRealItemsType setTask(array $task)
 * @method ArrayOfRealItemsType addPostItem(PostItemType $postItem)
 * @method PostItemType[] getPostItem()
 * @method ArrayOfRealItemsType setPostItem(array $postItem)
 */
class ArrayOfRealItemsType extends Type
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
}
