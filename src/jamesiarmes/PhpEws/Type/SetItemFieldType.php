<?php
/**
 * Contains \jamesiarmes\PhpEws\Type\SetItemFieldType.
 */

namespace jamesiarmes\PhpEws\Type;

/**
 * Represents an update to a single property of an item in an UpdateItem
 * operation.
 *
 * @package php-ews\Type
 */
class SetItemFieldType extends ItemChangeDescriptionType
{
    /**
     * Represents an Exchange calendar item to update.
     *
     * @since Exchange 2007
     *
     * @var \jamesiarmes\PhpEws\Type\CalendarItemType
     */
    public $CalendarItem;

    /**
     * Represents an Exchange contact item to update.
     *
     * @since Exchange 2007
     *
     * @var \jamesiarmes\PhpEws\Type\ContactItemType
     */
    public $Contact;

    /**
     * Represents a distribution list to update.
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
     * Represents a meeting cancellation to update.
     *
     * @since Exchange 2007
     *
     * @var \jamesiarmes\PhpEws\Type\MeetingCancellationMessageType
     */
    public $MeetingCancellation;

    /**
     * Represents a meeting message to update.
     *
     * @since Exchange 2007
     *
     * @var \jamesiarmes\PhpEws\Type\MeetingMessageType
     */
    public $MeetingMessage;

    /**
     * Represents a meeting request to update.
     *
     * @since Exchange 2007
     *
     * @var \jamesiarmes\PhpEws\Type\MeetingRequestMessageType
     */
    public $MeetingRequest;

    /**
     * Represents a meeting response to update.
     *
     * @since Exchange 2007
     *
     * @var \jamesiarmes\PhpEws\Type\MeetingResponseMessageType
     */
    public $MeetingResponse;

    /**
     * Represents an Exchange e-mail message to update.
     *
     * @since Exchange 2007
     *
     * @var \jamesiarmes\PhpEws\Type\MessageType
     */
    public $Message;

    /**
     * Represents a post to update.
     *
     * @since Exchange 2007
     *
     * @var \jamesiarmes\PhpEws\Type\PostItemType
     */
    public $PostItem;

    /**
     * Represents a task to update.
     *
     * @since Exchange 2007
     *
     * @var \jamesiarmes\PhpEws\Type\TaskType
     */
    public $Task;
}
