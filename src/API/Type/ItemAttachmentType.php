<?php

namespace jamesiarmes\PEWS\API\Type;

/**
 * Class representing ItemAttachmentType
 *
 *
 * XSD Type: ItemAttachmentType
 *
 * @method ItemType getItem()
 * @method ItemAttachmentType setItem(ItemType $item)
 * @method MessageType getMessage()
 * @method ItemAttachmentType setMessage(MessageType $message)
 * @method CalendarItemType getCalendarItem()
 * @method ItemAttachmentType setCalendarItem(CalendarItemType $calendarItem)
 * @method ContactItemType getContact()
 * @method ItemAttachmentType setContact(ContactItemType $contact)
 * @method MeetingMessageType getMeetingMessage()
 * @method ItemAttachmentType setMeetingMessage(MeetingMessageType $meetingMessage)
 * @method MeetingRequestMessageType getMeetingRequest()
 * @method ItemAttachmentType setMeetingRequest(MeetingRequestMessageType $meetingRequest)
 * @method MeetingResponseMessageType getMeetingResponse()
 * @method ItemAttachmentType setMeetingResponse(MeetingResponseMessageType $meetingResponse)
 * @method MeetingCancellationMessageType getMeetingCancellation()
 * @method ItemAttachmentType setMeetingCancellation(MeetingCancellationMessageType $meetingCancellation)
 * @method TaskType getTask()
 * @method ItemAttachmentType setTask(TaskType $task)
 * @method PostItemType getPostItem()
 * @method ItemAttachmentType setPostItem(PostItemType $postItem)
 */
class ItemAttachmentType extends AttachmentType
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

    public function getItemAttachment()
    {
        if ($this->item) {
            return $this->item;
        }

        if ($this->message) {
            return $this->message;
        }

        if ($this->calendarItem) {
            return $this->calendarItem;
        }

        if ($this->meetingMessage) {
            return $this->meetingMessage;
        }

        if ($this->meetingResponse) {
            return $this->meetingResponse;
        }

        if ($this->meetingRequest) {
            return $this->meetingRequest;
        }

        if ($this->task) {
            return $this->task;
        }

        if ($this->postItem) {
            return $this->postItem;
        }

        return null;
    }
}
