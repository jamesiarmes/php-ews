<?php

namespace jamesiarmes\PEWS\API\Type;

/**
 * Class representing ItemAttachmentType
 *
 *
 * XSD Type: ItemAttachmentType
 *
 * @method ItemAttachmentType getItem()
 * @method ItemAttachmentType setItem(ItemType $item)
 * @method ItemAttachmentType getMessage()
 * @method ItemAttachmentType setMessage(MessageType $message)
 * @method ItemAttachmentType getCalendarItem()
 * @method ItemAttachmentType setCalendarItem(CalendarItemType $calendarItem)
 * @method ItemAttachmentType getContact()
 * @method ItemAttachmentType setContact(ContactItemType $contact)
 * @method ItemAttachmentType getMeetingMessage()
 * @method ItemAttachmentType setMeetingMessage(MeetingMessageType $meetingMessage)
 * @method ItemAttachmentType getMeetingRequest()
 * @method ItemAttachmentType setMeetingRequest(MeetingRequestMessageType $meetingRequest)
 * @method ItemAttachmentType getMeetingResponse()
 * @method ItemAttachmentType setMeetingResponse(MeetingResponseMessageType $meetingResponse)
 * @method ItemAttachmentType getMeetingCancellation()
 * @method ItemAttachmentType setMeetingCancellation(MeetingCancellationMessageType $meetingCancellation)
 * @method ItemAttachmentType getTask()
 * @method ItemAttachmentType setTask(TaskType $task)
 * @method ItemAttachmentType getPostItem()
 * @method ItemAttachmentType setPostItem(PostItemType $postItem)
 */
class ItemAttachmentType extends AttachmentType
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

