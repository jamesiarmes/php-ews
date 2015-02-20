<?php
/**
 * Contains ArrayOfRealItemsType.
 */

namespace jamesiarmes\EWS\Types;

use jamesiarmes\EWS\EWSType;

/**
 * Represents an array of items.
 *
 * @package jamesiarmes\EWS\Types
 */
class ArrayOfRealItemsType extends EWSType
{
    /**
     * Represents an Exchange calendar item.
     *
     * @since Exchange 2007
     *
     * @var CalendarItemType
     */
    public $CalendarItem;

    /**
     * Represents an Exchange contact item.
     *
     * @since Exchange 2007
     *
     * @var ContactItemType
     */
    public $Contact;

    /**
     * Represents a distribution list.
     *
     * @since Exchange 2007
     *
     * @var DistributionListType
     */
    public $DistributionList;

    /**
     * Represents an item in the Exchange store.
     *
     * @since Exchange 2007
     *
     * @var ItemType
     */
    public $Item;

    /**
     * Represents a meeting cancellation in the Exchange store.
     *
     * @since Exchange 2007
     *
     * @var MeetingCancellationMessageType
     */
    public $MeetingCancellation;

    /**
     * Represents a meeting message in the Exchange store.
     *
     * @since Exchange 2007
     *
     * @var MeetingMessageType
     */
    public $MeetingMessage;

    /**
     * Represents a meeting request in the Exchange store.
     *
     * @since Exchange 2007
     *
     * @var MeetingRequestMessageType
     */
    public $MeetingRequest;

    /**
     * Represents a meeting response in the Exchange store.
     *
     * @since Exchange 2007
     *
     * @var MeetingResponseMessageType
     */
    public $MeetingResponse;

    /**
     * Represents an Exchange e-mail message.
     *
     * @since Exchange 2007
     *
     * @var MessageType
     */
    public $Message;

    /**
     * Represents a post item in the Exchange store.
     *
     * @since Exchange 2007
     *
     * @var PostItemType
     */
    public $PostItem;

    /**
     * Represents a task in the Exchange store.
     *
     * @since Exchange 2007
     *
     * @var TaskType
     */
    public $Task;
}
