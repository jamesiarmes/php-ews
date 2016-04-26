<?php

namespace jamesiarmes\PEWS\API\Type;

/**
 * Class representing SetItemFieldType
 *
 *
 * XSD Type: SetItemFieldType
 *
 * @method ItemType getItem()
 * @method SetItemFieldType setItem(ItemType $item)
 * @method MessageType getMessage()
 * @method SetItemFieldType setMessage(MessageType $message)
 * @method CalendarItemType getCalendarItem()
 * @method SetItemFieldType setCalendarItem(CalendarItemType $calendarItem)
 * @method ContactItemType getContact()
 * @method SetItemFieldType setContact(ContactItemType $contact)
 * @method DistributionListType getDistributionList()
 * @method SetItemFieldType setDistributionList(DistributionListType $distributionList)
 * @method MeetingMessageType getMeetingMessage()
 * @method SetItemFieldType setMeetingMessage(MeetingMessageType $meetingMessage)
 * @method MeetingRequestMessageType getMeetingRequest()
 * @method SetItemFieldType setMeetingRequest(MeetingRequestMessageType $meetingRequest)
 * @method MeetingResponseMessageType getMeetingResponse()
 * @method SetItemFieldType setMeetingResponse(MeetingResponseMessageType $meetingResponse)
 * @method MeetingCancellationMessageType getMeetingCancellation()
 * @method SetItemFieldType setMeetingCancellation(MeetingCancellationMessageType $meetingCancellation)
 * @method TaskType getTask()
 * @method SetItemFieldType setTask(TaskType $task)
 * @method PostItemType getPostItem()
 * @method SetItemFieldType setPostItem(PostItemType $postItem)
 */
class SetItemFieldType extends ItemChangeDescriptionType
{

    /**
     * @var \jamesiarmes\PEWS\API\Type\ItemType
     */
    protected $item = null;

    /**
     * @var \jamesiarmes\PEWS\API\Type\MessageType
     */
    protected $message = null;

    /**
     * @var \jamesiarmes\PEWS\API\Type\CalendarItemType
     */
    protected $calendarItem = null;

    /**
     * @var \jamesiarmes\PEWS\API\Type\ContactItemType
     */
    protected $contact = null;

    /**
     * @var \jamesiarmes\PEWS\API\Type\DistributionListType
     */
    protected $distributionList = null;

    /**
     * @var \jamesiarmes\PEWS\API\Type\MeetingMessageType
     */
    protected $meetingMessage = null;

    /**
     * @var \jamesiarmes\PEWS\API\Type\MeetingRequestMessageType
     */
    protected $meetingRequest = null;

    /**
     * @var \jamesiarmes\PEWS\API\Type\MeetingResponseMessageType
     */
    protected $meetingResponse = null;

    /**
     * @var \jamesiarmes\PEWS\API\Type\MeetingCancellationMessageType
     */
    protected $meetingCancellation = null;

    /**
     * @var \jamesiarmes\PEWS\API\Type\TaskType
     */
    protected $task = null;

    /**
     * @var \jamesiarmes\PEWS\API\Type\PostItemType
     */
    protected $postItem = null;
}
