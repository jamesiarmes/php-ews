<?php

namespace jamesiarmes\PEWS\API\Type;

/**
 * Class representing AppendToItemFieldType
 *
 *
 * XSD Type: AppendToItemFieldType
 *
 * @method AppendToItemFieldType getItem()
 * @method AppendToItemFieldType setItem(ItemType $item)
 * @method AppendToItemFieldType getMessage()
 * @method AppendToItemFieldType setMessage(MessageType $message)
 * @method AppendToItemFieldType getCalendarItem()
 * @method AppendToItemFieldType setCalendarItem(CalendarItemType $calendarItem)
 * @method AppendToItemFieldType getContact()
 * @method AppendToItemFieldType setContact(ContactItemType $contact)
 * @method AppendToItemFieldType getDistributionList()
 * @method AppendToItemFieldType setDistributionList(DistributionListType $distributionList)
 * @method AppendToItemFieldType getMeetingMessage()
 * @method AppendToItemFieldType setMeetingMessage(MeetingMessageType $meetingMessage)
 * @method AppendToItemFieldType getMeetingRequest()
 * @method AppendToItemFieldType setMeetingRequest(MeetingRequestMessageType $meetingRequest)
 * @method AppendToItemFieldType getMeetingResponse()
 * @method AppendToItemFieldType setMeetingResponse(MeetingResponseMessageType $meetingResponse)
 * @method AppendToItemFieldType getMeetingCancellation()
 * @method AppendToItemFieldType setMeetingCancellation(MeetingCancellationMessageType $meetingCancellation)
 * @method AppendToItemFieldType getTask()
 * @method AppendToItemFieldType setTask(TaskType $task)
 * @method AppendToItemFieldType getPostItem()
 * @method AppendToItemFieldType setPostItem(PostItemType $postItem)
 */
class AppendToItemFieldType extends ItemChangeDescriptionType
{

    /**
     * @property \jamesiarmes\PEWS\API\Type\ItemType $item
     */
    protected $item = null;

    /**
     * @property \jamesiarmes\PEWS\API\Type\MessageType $message
     */
    protected $message = null;

    /**
     * @property \jamesiarmes\PEWS\API\Type\CalendarItemType $calendarItem
     */
    protected $calendarItem = null;

    /**
     * @property \jamesiarmes\PEWS\API\Type\ContactItemType $contact
     */
    protected $contact = null;

    /**
     * @property \jamesiarmes\PEWS\API\Type\DistributionListType $distributionList
     */
    protected $distributionList = null;

    /**
     * @property \jamesiarmes\PEWS\API\Type\MeetingMessageType $meetingMessage
     */
    protected $meetingMessage = null;

    /**
     * @property \jamesiarmes\PEWS\API\Type\MeetingRequestMessageType $meetingRequest
     */
    protected $meetingRequest = null;

    /**
     * @property \jamesiarmes\PEWS\API\Type\MeetingResponseMessageType $meetingResponse
     */
    protected $meetingResponse = null;

    /**
     * @property \jamesiarmes\PEWS\API\Type\MeetingCancellationMessageType
     * $meetingCancellation
     */
    protected $meetingCancellation = null;

    /**
     * @property \jamesiarmes\PEWS\API\Type\TaskType $task
     */
    protected $task = null;

    /**
     * @property \jamesiarmes\PEWS\API\Type\PostItemType $postItem
     */
    protected $postItem = null;


}

