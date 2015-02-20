<?php
/**
 * Contains SyncFolderItemsCreateOrUpdateType.
 */

namespace jamesiarmes\EWS\Types;

use jamesiarmes\EWS\EWSType;

/**
 * Identifies a single item to create in the local client store.
 *
 * @package jamesiarmes\EWS\Types
 */
class SyncFolderItemsCreateOrUpdateType extends EWSType
{
    /**
     * Represents an Exchange calendar item to create.
     *
     * @since Exchange 2007
     *
     * @var CalendarItemType
     */
    public $CalendarItem;

    /**
     * Represents an Exchange contact item to create.
     *
     * @since Exchange 2007
     *
     * @var ContactItemType
     */
    public $Contact;

    /**
     * Represents a distribution list to create.
     *
     * @since Exchange 2007
     *
     * @var DistributionListType
     */
    public $DistributionList;

    /**
     * Represents a generic Exchange item to create.
     *
     * @since Exchange 2007
     *
     * @var ItemType
     */
    public $Item;

    /**
     * Represents a meeting cancellation to create.
     *
     * @since Exchange 2007
     *
     * @var MeetingCancellationMessageType
     */
    public $MeetingCancellation;

    /**
     * Represents a meeting message to create.
     *
     * @since Exchange 2007
     *
     * @var MeetingMessageType
     */
    public $MeetingMessage;

    /**
     * Represents a meeting request to create.
     *
     * @since Exchange 2007
     *
     * @var MeetingRequestMessageType
     */
    public $MeetingRequest;

    /**
     * Represents a meeting response to create.
     *
     * @since Exchange 2007
     *
     * @var MeetingResponseMessageType
     */
    public $MeetingResponse;

    /**
     * Represents an Exchange e-mail message to create.
     *
     * @since Exchange 2007
     *
     * @var MessageType
     */
    public $Message;

    /**
     * Represents a task to create.
     *
     * @since Exchange 2007
     *
     * @var TaskType
     */
    public $Task;
}
