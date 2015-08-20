<?php

namespace jamesiarmes\PEWS\API\Type;

use jamesiarmes\PEWS\API\Type;

/**
 * Class representing ArrayOfRealItemsType
 *
 *
 * XSD Type: ArrayOfRealItemsType
 *
 * @method ArrayOfRealItemsType getItem()
 * @method ArrayOfRealItemsType setItem(array $item)
 * @method ArrayOfRealItemsType getMessage()
 * @method ArrayOfRealItemsType setMessage(array $message)
 * @method ArrayOfRealItemsType getCalendarItem()
 * @method ArrayOfRealItemsType setCalendarItem(array $calendarItem)
 * @method ArrayOfRealItemsType getContact()
 * @method ArrayOfRealItemsType setContact(array $contact)
 * @method ArrayOfRealItemsType getDistributionList()
 * @method ArrayOfRealItemsType setDistributionList(array $distributionList)
 * @method ArrayOfRealItemsType getMeetingMessage()
 * @method ArrayOfRealItemsType setMeetingMessage(array $meetingMessage)
 * @method ArrayOfRealItemsType getMeetingRequest()
 * @method ArrayOfRealItemsType setMeetingRequest(array $meetingRequest)
 * @method ArrayOfRealItemsType getMeetingResponse()
 * @method ArrayOfRealItemsType setMeetingResponse(array $meetingResponse)
 * @method ArrayOfRealItemsType getMeetingCancellation()
 * @method ArrayOfRealItemsType setMeetingCancellation(array $meetingCancellation)
 * @method ArrayOfRealItemsType getTask()
 * @method ArrayOfRealItemsType setTask(array $task)
 * @method ArrayOfRealItemsType getPostItem()
 * @method ArrayOfRealItemsType setPostItem(array $postItem)
 */
class ArrayOfRealItemsType extends Type
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
}
