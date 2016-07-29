<?php
/**
 * Contains \jamesiarmes\PhpEws\ArrayType\ArrayOfRealItemsType.
 */

namespace jamesiarmes\PhpEws\ArrayType;

use \jamesiarmes\PhpEws\ArrayType;

/**
 * Represents an array of items.
 *
 * @package php-ews\Array
 */
class ArrayOfRealItemsType extends ArrayType
{
    /**
     * Represents an Exchange calendar item.
     *
     * @since Exchange 2007
     *
     * @var \jamesiarmes\PhpEws\Type\CalendarItemType[]
     */
    public $CalendarItem;

    /**
     * Represents an Exchange contact item.
     *
     * @since Exchange 2007
     *
     * @var \jamesiarmes\PhpEws\Type\ContactItemType[]
     */
    public $Contact;

    /**
     * Represents a distribution list.
     *
     * @since Exchange 2007
     *
     * @var \jamesiarmes\PhpEws\Type\DistributionListType[]
     */
    public $DistributionList;

    /**
     * Represents an item in the Exchange store.
     *
     * @since Exchange 2007
     *
     * @var \jamesiarmes\PhpEws\Type\ItemType[]
     */
    public $Item;

    /**
     * Represents a meeting cancellation in the Exchange store.
     *
     * @since Exchange 2007
     *
     * @var \jamesiarmes\PhpEws\Type\MeetingCancellationMessageType[]
     */
    public $MeetingCancellation;

    /**
     * Represents a meeting message in the Exchange store.
     *
     * @since Exchange 2007
     *
     * @var \jamesiarmes\PhpEws\Type\MeetingMessageType[]
     */
    public $MeetingMessage;

    /**
     * Represents a meeting request in the Exchange store.
     *
     * @since Exchange 2007
     *
     * @var \jamesiarmes\PhpEws\Type\MeetingRequestMessageType[]
     */
    public $MeetingRequest;

    /**
     * Represents a meeting response in the Exchange store.
     *
     * @since Exchange 2007
     *
     * @var \jamesiarmes\PhpEws\Type\MeetingResponseMessageType[]
     */
    public $MeetingResponse;

    /**
     * Represents an Exchange e-mail message.
     *
     * @since Exchange 2007
     *
     * @var \jamesiarmes\PhpEws\Type\MessageType[]
     */
    public $Message;

    /**
     * Represents a post item in the Exchange store.
     *
     * @since Exchange 2007
     *
     * @var \jamesiarmes\PhpEws\Type\PostItemType[]
     */
    public $PostItem;

    /**
     * Represents a task in the Exchange store.
     *
     * @since Exchange 2007
     *
     * @var \jamesiarmes\PhpEws\Type\TaskType[]
     */
    public $Task;
}
