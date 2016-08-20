<?php
/**
 * Contains \jamesiarmes\PhpEws\Type\AppendToItemFieldType.
 */

namespace jamesiarmes\PhpEws\Type;

/**
 * Identifies data to append to a single property of an item during an
 * UpdateItem operation.
 *
 * @package php-ews\Type
 */
class AppendToItemFieldType extends ItemChangeDescriptionType
{
    /**
     * Represents an Exchange calendar item.
     *
     * @since Exchange 2007
     *
     * @var \jamesiarmes\PhpEws\Type\CalendarItemType
     */
    public $CalendarItem;

    /**
     * Represents an Exchange contact item.
     *
     * @since Exchange 2007
     *
     * @var \jamesiarmes\PhpEws\Type\ContactItemType
     */
    public $Contact;

    /**
     * Represents a distribution list.
     *
     * @since Exchange 2007
     *
     * @var \jamesiarmes\PhpEws\Type\DistributionListType
     */
    public $DistributionList;

    /**
     * Represents an item in the Exchange store.
     *
     * @since Exchange 2007
     *
     * @var \jamesiarmes\PhpEws\Type\ItemType
     */
    public $Item;

    /**
     * Represents a meeting cancellation in the Exchange store.
     *
     * @since Exchange 2007
     *
     * @var \jamesiarmes\PhpEws\Type\MeetingCancellationMessageType
     */
    public $MeetingCancellation;

    /**
     * Represents a meeting in the Exchange store.
     *
     * @since Exchange 2007
     *
     * @var \jamesiarmes\PhpEws\Type\MeetingMessageType
     */
    public $MeetingMessage;

    /**
     * Represents a meeting request in the Exchange store.
     *
     * @since Exchange 2007
     *
     * @var \jamesiarmes\PhpEws\Type\MeetingRequestMessageType
     */
    public $MeetingRequest;

    /**
     * Represents a meeting response in the Exchange store.
     *
     * @since Exchange 2007
     *
     * @var \jamesiarmes\PhpEws\Type\MeetingResponseMessageType
     */
    public $MeetingResponse;

    /**
     * Represents an Exchange e-mail message.
     *
     * @since Exchange 2007
     *
     * @var \jamesiarmes\PhpEws\Type\MessageType
     */
    public $Message;

    /**
     * Represents a task in the Exchange store.
     *
     * @since Exchange 2007
     *
     * @var \jamesiarmes\PhpEws\Type\TaskType
     */
    public $Task;
}
