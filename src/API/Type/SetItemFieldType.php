<?php

namespace jamesiarmes\PEWS\API\Type;

/**
 * Class representing SetItemFieldType
 *
 *
 * XSD Type: SetItemFieldType
 *
 * @method SetItemFieldType getItem()
 * @method SetItemFieldType setItem(ItemType $item)
 * @method SetItemFieldType getMessage()
 * @method SetItemFieldType setMessage(MessageType $message)
 * @method SetItemFieldType getCalendarItem()
 * @method SetItemFieldType setCalendarItem(CalendarItemType $calendarItem)
 * @method SetItemFieldType getContact()
 * @method SetItemFieldType setContact(ContactItemType $contact)
 * @method SetItemFieldType getDistributionList()
 * @method SetItemFieldType setDistributionList(DistributionListType $distributionList)
 * @method SetItemFieldType getMeetingMessage()
 * @method SetItemFieldType setMeetingMessage(MeetingMessageType $meetingMessage)
 * @method SetItemFieldType getMeetingRequest()
 * @method SetItemFieldType setMeetingRequest(MeetingRequestMessageType $meetingRequest)
 * @method SetItemFieldType getMeetingResponse()
 * @method SetItemFieldType setMeetingResponse(MeetingResponseMessageType $meetingResponse)
 * @method SetItemFieldType getMeetingCancellation()
 * @method SetItemFieldType setMeetingCancellation(MeetingCancellationMessageType $meetingCancellation)
 * @method SetItemFieldType getTask()
 * @method SetItemFieldType setTask(TaskType $task)
 * @method SetItemFieldType getPostItem()
 * @method SetItemFieldType setPostItem(PostItemType $postItem)
 */
class SetItemFieldType extends ItemChangeDescriptionType
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

