<?php

namespace jamesiarmes\PEWS\API\Type;

use jamesiarmes\PEWS\API\Type;

/**
 * Class representing SyncFolderItemsCreateOrUpdateType
 *
 *
 * XSD Type: SyncFolderItemsCreateOrUpdateType
 *
 * @method SyncFolderItemsCreateOrUpdateType getItem()
 * @method SyncFolderItemsCreateOrUpdateType setItem(ItemType $item)
 * @method SyncFolderItemsCreateOrUpdateType getMessage()
 * @method SyncFolderItemsCreateOrUpdateType setMessage(MessageType $message)
 * @method SyncFolderItemsCreateOrUpdateType getCalendarItem()
 * @method SyncFolderItemsCreateOrUpdateType setCalendarItem(CalendarItemType $calendarItem)
 * @method SyncFolderItemsCreateOrUpdateType getContact()
 * @method SyncFolderItemsCreateOrUpdateType setContact(ContactItemType $contact)
 * @method SyncFolderItemsCreateOrUpdateType getDistributionList()
 * @method SyncFolderItemsCreateOrUpdateType setDistributionList(DistributionListType $distributionList)
 * @method SyncFolderItemsCreateOrUpdateType getMeetingMessage()
 * @method SyncFolderItemsCreateOrUpdateType setMeetingMessage(MeetingMessageType $meetingMessage)
 * @method SyncFolderItemsCreateOrUpdateType getMeetingRequest()
 * @method SyncFolderItemsCreateOrUpdateType setMeetingRequest(MeetingRequestMessageType $meetingRequest)
 * @method SyncFolderItemsCreateOrUpdateType getMeetingResponse()
 * @method SyncFolderItemsCreateOrUpdateType setMeetingResponse(MeetingResponseMessageType $meetingResponse)
 * @method SyncFolderItemsCreateOrUpdateType getMeetingCancellation()
 * @method SyncFolderItemsCreateOrUpdateType setMeetingCancellation(MeetingCancellationMessageType $meetingCancellation)
 * @method SyncFolderItemsCreateOrUpdateType getTask()
 * @method SyncFolderItemsCreateOrUpdateType setTask(TaskType $task)
 * @method SyncFolderItemsCreateOrUpdateType getPostItem()
 * @method SyncFolderItemsCreateOrUpdateType setPostItem(PostItemType $postItem)
 */
class SyncFolderItemsCreateOrUpdateType extends Type
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

