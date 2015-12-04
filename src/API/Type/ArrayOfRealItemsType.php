<?php

namespace jamesiarmes\PEWS\API\Type;

use jamesiarmes\PEWS\API\Type;

/**
 * Class representing ArrayOfRealItemsType
 *
 *
 * XSD Type: ArrayOfRealItemsType
 *
 * @method ArrayOfRealItemsType addItem(ItemType $item)
 * @method ItemType[] getItem()
 * @method ArrayOfRealItemsType setItem(array $item)
 * @method ArrayOfRealItemsType addMessage(MessageType $message)
 * @method MessageType[] getMessage()
 * @method ArrayOfRealItemsType setMessage(array $message)
 * @method ArrayOfRealItemsType addCalendarItem(CalendarItemType $calendarItem)
 * @method CalendarItemType[] getCalendarItem()
 * @method ArrayOfRealItemsType setCalendarItem(array $calendarItem)
 * @method ArrayOfRealItemsType addContact(ContactItemType $contact)
 * @method ContactItemType[] getContact()
 * @method ArrayOfRealItemsType setContact(array $contact)
 * @method ArrayOfRealItemsType addDistributionList(DistributionListType $distributionList)
 * @method DistributionListType[] getDistributionList()
 * @method ArrayOfRealItemsType setDistributionList(array $distributionList)
 * @method ArrayOfRealItemsType addMeetingMessage(MeetingMessageType $meetingMessage)
 * @method MeetingMessageType[] getMeetingMessage()
 * @method ArrayOfRealItemsType setMeetingMessage(array $meetingMessage)
 * @method ArrayOfRealItemsType addMeetingRequest(MeetingRequestMessageType $meetingRequest)
 * @method MeetingRequestMessageType[] getMeetingRequest()
 * @method ArrayOfRealItemsType setMeetingRequest(array $meetingRequest)
 * @method ArrayOfRealItemsType addMeetingResponse(MeetingResponseMessageType $meetingResponse)
 * @method MeetingResponseMessageType[] getMeetingResponse()
 * @method ArrayOfRealItemsType setMeetingResponse(array $meetingResponse)
 * @method ArrayOfRealItemsType addMeetingCancellation(MeetingCancellationMessageType $meetingCancellation)
 * @method MeetingCancellationMessageType[] getMeetingCancellation()
 * @method ArrayOfRealItemsType setMeetingCancellation(array $meetingCancellation)
 * @method ArrayOfRealItemsType addTask(TaskType $task)
 * @method TaskType[] getTask()
 * @method ArrayOfRealItemsType setTask(array $task)
 * @method ArrayOfRealItemsType addPostItem(PostItemType $postItem)
 * @method PostItemType[] getPostItem()
 * @method ArrayOfRealItemsType setPostItem(array $postItem)
 */
class ArrayOfRealItemsType extends Type implements \Countable, \ArrayAccess, \IteratorAggregate
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

    private $itemsArray;

    public function getItems()
    {
        if ($this->itemsArray) {
            return $this->itemsArray;
        }

        $items = null;

        if ($this->item) {
            $items = $this->item;
        }

        if ($this->message) {
            $items = $this->message;
        }

        if ($this->calendarItem) {
            $items = $this->calendarItem;
        }

        if ($this->contact) {
            $items = $this->contact;
        }

        if ($this->distributionList) {
            $items = $this->distributionList;
        }

        if ($this->meetingMessage) {
            $items = $this->meetingMessage;
        }

        if ($this->meetingRequest) {
            $items = $this->meetingRequest;
        }

        if ($this->meetingResponse) {
            $items = $this->meetingResponse;
        }

        if ($this->meetingCancellation) {
            $items = $this->meetingCancellation;
        }

        if ($this->task) {
            $items = $this->task;
        }

        if ($this->postItem) {
            $items = $this->postItem;
        }

        if ($items === null) {
            $items = array();
        }

        if (!is_array($items)) {
            $items = array($items);
        }

        $this->itemsArray = $items;
        return $this->itemsArray;
    }

    public function count()
    {
        return count($this->getItems());
    }

    public function offsetExists($offset)
    {
        return isset($this->getItems()[$offset]);
    }

    public function offsetGet($offset)
    {
        $this->getItems();
        return isset($this->itemsArray[$offset]) ? $this->itemsArray[$offset] : null;
    }

    public function offsetSet($offset, $value)
    {
        $this->getItems();

        if (is_null($offset)) {
            $this->itemsArray[] = $value;
        } else {
            $this->itemsArray[$offset] = $value;
        }
    }

    public function offsetUnset($offset)
    {
        $this->getItems();
        unset($this->itemsArray[$offset]);
    }

    public function getIterator()
    {
        $this->getItems();
        return new \ArrayIterator($this->itemsArray);
    }
}
