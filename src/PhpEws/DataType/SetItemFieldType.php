<?php

namespace PhpEws\DataType;

use PhpEws\DataType;

/**
 * Definition of the SetItemFieldType type
 */
class SetItemFieldType extends DataType
{
    /**
     * Represents an Exchange calendar item to update.
     *
     * @var CalendarItemType
     */
    public $CalendarItem;

    /**
     * Represents an Exchange contact item to update.
     *
     * @var ContactItemType
     */
    public $Contact;

    /**
     * Represents a distribution list to update.
     *
     * @var DistributionListType
     */
    public $DistributionList;

    /**
     * Identifies extended MAPI properties to set.
     *
     * @var PathToExtendedFieldType
     */
    public $ExtendedFieldURI;

    /**
     * Identifies frequently referenced properties by URI.
     *
     * @var PathToUnindexedFieldType
     */
    public $FieldURI;

    /**
     * Identifies individual members of a dictionary.
     *
     * @var PathToIndexedFieldType
     */
    public $IndexedFieldURI;

    /**
     * Represents an item in the Exchange store.
     *
     * @var ItemType
     */
    public $Item;

    /**
     * Represents a meeting cancellation to update.
     *
     * @var MeetingCancellationMessageType
     */
    public $MeetingCancellation;

    /**
     * Represents a meeting message to update.
     *
     * @var MeetingMessageType
     */
    public $MeetingMessage;

    /**
     * Represents a meeting request to update.
     *
     * @var MeetingRequestMessageType
     */
    public $MeetingRequest;

    /**
     * Represents a meeting response to update.
     *
     * @var MeetingResponseMessageType
     */
    public $MeetingResponse;

    /**
     * Represents an Exchange e-mail message to update.
     *
     * @var MessageType
     */
    public $Message;

    /**
     * represents a post item in the Exchange store.
     *
     * @var PostItemType
     */
    public $PostItem;

    /**
     * Represents a task to update.
     *
     * @var TaskType
     */
    public $Task;
}
