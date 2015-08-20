<?php

namespace jamesiarmes\PEWS\API\Type;

use jamesiarmes\PEWS\API\Type;

/**
 * Class representing ArrayOfRealItemsType
 *
 *
 * XSD Type: ArrayOfRealItemsType
 *
 * @method array getItem()
 * @method ArrayOfRealItemsType setItem(array $item)
 * @method array getMessage()
 * @method ArrayOfRealItemsType setMessage(array $message)
 * @method array getCalendarItem()
 * @method ArrayOfRealItemsType setCalendarItem(array $calendarItem)
 * @method array getContact()
 * @method ArrayOfRealItemsType setContact(array $contact)
 * @method array getDistributionList()
 * @method ArrayOfRealItemsType setDistributionList(array $distributionList)
 * @method array getMeetingMessage()
 * @method ArrayOfRealItemsType setMeetingMessage(array $meetingMessage)
 * @method array getMeetingRequest()
 * @method ArrayOfRealItemsType setMeetingRequest(array $meetingRequest)
 * @method array getMeetingResponse()
 * @method ArrayOfRealItemsType setMeetingResponse(array $meetingResponse)
 * @method array getMeetingCancellation()
 * @method ArrayOfRealItemsType setMeetingCancellation(array $meetingCancellation)
 * @method array getTask()
 * @method ArrayOfRealItemsType setTask(array $task)
 * @method array getPostItem()
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
