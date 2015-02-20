<?php
/**
 * Contains AppendToItemFieldType.
 */

namespace jamesiarmes\EWS\Types;

use jamesiarmes\EWS\EWSType;

/**
 * Identifies data to append to a single property of an item during an
 * UpdateItem operation.
 *
 * @package jamesiarmes\EWS\Types
 *
 * @todo Extend ItemChangeDescriptionType.
 */
class AppendToItemFieldType extends EWSType
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
     * Identifies extended MAPI properties to append.
     *
     * @since Exchange 2007
     *
     * @var PathToExtendedFieldType
     */
    public $ExtendedFieldURI;

    /**
     * Identifies frequently referenced properties by URI.
     *
     * @since Exchange 2007
     *
     * @var PathToUnindexedFieldType
     */
    public $FieldURI;

    /**
     * Identifies individual members of a dictionary.
     *
     * @since Exchange 2007
     *
     * @var PathToIndexedFieldType
     */
    public $IndexedFieldURI;

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
     * Represents a meeting in the Exchange store.
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
     * Represents a task in the Exchange store.
     *
     * @since Exchange 2007
     *
     * @var TaskType
     */
    public $Task;
}
