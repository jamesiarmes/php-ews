<?php

namespace jamesiarmes\PEWS\API\Type;

use jamesiarmes\PEWS\API\Type;

/**
 * Class representing SyncFolderItemsCreateOrUpdateType
 *
 *
 * XSD Type: SyncFolderItemsCreateOrUpdateType
 *
 * @method ItemType getItem()
 * @method SyncFolderItemsCreateOrUpdateType setItem(ItemType $item)
 * @method MessageType getMessage()
 * @method SyncFolderItemsCreateOrUpdateType setMessage(MessageType $message)
 * @method CalendarItemType getCalendarItem()
 * @method SyncFolderItemsCreateOrUpdateType setCalendarItem(CalendarItemType $calendarItem)
 * @method ContactItemType getContact()
 * @method SyncFolderItemsCreateOrUpdateType setContact(ContactItemType $contact)
 * @method DistributionListType getDistributionList()
 * @method SyncFolderItemsCreateOrUpdateType setDistributionList(DistributionListType $distributionList)
 * @method MeetingMessageType getMeetingMessage()
 * @method SyncFolderItemsCreateOrUpdateType setMeetingMessage(MeetingMessageType $meetingMessage)
 * @method MeetingRequestMessageType getMeetingRequest()
 * @method SyncFolderItemsCreateOrUpdateType setMeetingRequest(MeetingRequestMessageType $meetingRequest)
 * @method MeetingResponseMessageType getMeetingResponse()
 * @method SyncFolderItemsCreateOrUpdateType setMeetingResponse(MeetingResponseMessageType $meetingResponse)
 * @method MeetingCancellationMessageType getMeetingCancellation()
 * @method SyncFolderItemsCreateOrUpdateType setMeetingCancellation(MeetingCancellationMessageType $meetingCancellation)
 * @method TaskType getTask()
 * @method SyncFolderItemsCreateOrUpdateType setTask(TaskType $task)
 * @method PostItemType getPostItem()
 * @method SyncFolderItemsCreateOrUpdateType setPostItem(PostItemType $postItem)
 */
class SyncFolderItemsCreateOrUpdateType extends Type
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
