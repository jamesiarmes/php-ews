<?php

namespace jamesiarmes\PEWS\API\TypeTest;

/**
 * Class representing ItemAttachmentType
 *
 *
 * XSD Type: ItemAttachmentType
 *
 * @method ItemAttachmentType getItem()
 * @method ItemAttachmentType setItem($item)
 * @method ItemAttachmentType getMessage()
 * @method ItemAttachmentType setMessage($message)
 * @method ItemAttachmentType getCalendarItem()
 * @method ItemAttachmentType setCalendarItem($calendarItem)
 * @method ItemAttachmentType getContact()
 * @method ItemAttachmentType setContact($contact)
 * @method ItemAttachmentType getMeetingMessage()
 * @method ItemAttachmentType setMeetingMessage($meetingMessage)
 * @method ItemAttachmentType getMeetingRequest()
 * @method ItemAttachmentType setMeetingRequest($meetingRequest)
 * @method ItemAttachmentType getMeetingResponse()
 * @method ItemAttachmentType setMeetingResponse($meetingResponse)
 * @method ItemAttachmentType getMeetingCancellation()
 * @method ItemAttachmentType setMeetingCancellation($meetingCancellation)
 * @method ItemAttachmentType getTask()
 * @method ItemAttachmentType setTask($task)
 * @method ItemAttachmentType getPostItem()
 * @method ItemAttachmentType setPostItem($postItem)
 */
class ItemAttachmentType extends AttachmentType
{

    /**
     * @property \jamesiarmes\PEWS\API\TypeTest\ItemType $item
     */
    protected $item = null;

    /**
     * @property \jamesiarmes\PEWS\API\TypeTest\MessageType $message
     */
    protected $message = null;

    /**
     * @property \jamesiarmes\PEWS\API\TypeTest\CalendarItemType $calendarItem
     */
    protected $calendarItem = null;

    /**
     * @property \jamesiarmes\PEWS\API\TypeTest\ContactItemType $contact
     */
    protected $contact = null;

    /**
     * @property \jamesiarmes\PEWS\API\TypeTest\MeetingMessageType $meetingMessage
     */
    protected $meetingMessage = null;

    /**
     * @property \jamesiarmes\PEWS\API\TypeTest\MeetingRequestMessageType
     * $meetingRequest
     */
    protected $meetingRequest = null;

    /**
     * @property \jamesiarmes\PEWS\API\TypeTest\MeetingResponseMessageType
     * $meetingResponse
     */
    protected $meetingResponse = null;

    /**
     * @property \jamesiarmes\PEWS\API\TypeTest\MeetingCancellationMessageType
     * $meetingCancellation
     */
    protected $meetingCancellation = null;

    /**
     * @property \jamesiarmes\PEWS\API\TypeTest\TaskType $task
     */
    protected $task = null;

    /**
     * @property \jamesiarmes\PEWS\API\TypeTest\PostItemType $postItem
     */
    protected $postItem = null;


}

