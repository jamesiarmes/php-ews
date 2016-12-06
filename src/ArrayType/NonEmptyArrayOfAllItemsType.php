<?php
/**
 * Contains \jamesiarmes\PhpEws\ArrayType\NonEmptyArrayOfAllItemsType.
 */

namespace jamesiarmes\PhpEws\ArrayType;

use \jamesiarmes\PhpEws\ArrayType;

/**
 * Identifies items of any type for numerous requests.
 *
 * @package php-ews\Array
 */
class NonEmptyArrayOfAllItemsType extends ArrayType
{
    /**
     * Represents an Accept reply to a meeting request.
     *
     * @since Exchange 2007
     *
     * @var \jamesiarmes\PhpEws\Type\AcceptItemType[]
     */
    public $AcceptItem = array();

    /**
     * Used to accept an invitation that allows access to another user’s
     * calendar or contacts data.
     *
     * @since Exchange 2010
     *
     * @var \jamesiarmes\PhpEws\Type\AcceptSharingInvitationType[]
     */
    public $AcceptSharingInvitation = array();

    /**
     * Represents an Exchange calendar item.
     *
     * @since Exchange 2007
     *
     * @var \jamesiarmes\PhpEws\Type\CalendarItemType[]
     */
    public $CalendarItem = array();

    /**
     * Represents the response object that is used to cancel a meeting.
     *
     * @since Exchange 2007
     *
     * @var \jamesiarmes\PhpEws\Type\CancelCalendarItemType[]
     */
    public $CancelCalendarItem = array();

    /**
     * Represents an Exchange contact item.
     *
     * @since Exchange 2007
     *
     * @var \jamesiarmes\PhpEws\Type\ContactItemType[]
     */
    public $Contact = array();

    /**
     * Represents a Decline reply to a meeting request.
     *
     * @since Exchange 2007
     *
     * @var \jamesiarmes\PhpEws\Type\DeclineItemType[]
     */
    public $DeclineItem = array();

    /**
     * Represents a distribution list.
     *
     * @since Exchange 2007
     *
     * @var \jamesiarmes\PhpEws\Type\DistributionListType[]
     */
    public $DistributionList = array();

    /**
     * Contains an Exchange store item to forward to recipients.
     *
     * @since Exchange 2007
     *
     * @var \jamesiarmes\PhpEws\Type\ForwardItemType[]
     */
    public $ForwardItem = array();

    /**
     * Represents an item in the Exchange store.
     *
     * @since Exchange 2007
     *
     * @var \jamesiarmes\PhpEws\Type\ItemType[]
     */
    public $Item = array();

    /**
     * Represents a meeting cancellation in the Exchange store.
     *
     * @since Exchange 2007
     *
     * @var \jamesiarmes\PhpEws\Type\MeetingCancellationMessageType[]
     */
    public $MeetingCancellation = array();

    /**
     * Represents a meeting message in the Exchange store.
     *
     * @since Exchange 2007
     *
     * @var \jamesiarmes\PhpEws\Type\MeetingMessageType[]
     */
    public $MeetingMessage = array();

    /**
     * Represents a meeting request in the Exchange store.
     *
     * @since Exchange 2007
     *
     * @var \jamesiarmes\PhpEws\Type\MeetingRequestMessageType[]
     */
    public $MeetingRequest = array();

    /**
     * Represents a meeting response in the Exchange store.
     *
     * @since Exchange 2007
     *
     * @var \jamesiarmes\PhpEws\Type\MeetingResponseMessageType[]
     */
    public $MeetingResponse = array();

    /**
     * Represents an Exchange e-mail message.
     *
     * @since Exchange 2007
     *
     * @var \jamesiarmes\PhpEws\Type\MessageType[]
     */
    public $Message = array();

    /**
     * Contains a post item.
     *
     * @since Exchange 2007
     *
     * @var \jamesiarmes\PhpEws\Type\PostItemType[]
     */
    public $PostItem = array();

    /**
     * Contains a reply to a post item.
     *
     * @since Exchange 2007 SP1
     *
     * @var \jamesiarmes\PhpEws\Type\PostReplyItemType[]
     */
    public $PostReplyItem = array();

    /**
     * Represents a response object that is used to remove a meeting item when a
     * MeetingCancellation message is received.
     *
     * @since Exchange 2007
     *
     * @var \jamesiarmes\PhpEws\Type\RemoveItemType[]
     */
    public $RemoveItem = array();

    /**
     * Contains a reply to the sender and all identified recipients of an item
     * in the Exchange store.
     *
     * @since Exchange 2007
     *
     * @var \jamesiarmes\PhpEws\Type\ReplyAllToItemType[]
     */
    public $ReplyAllToItem = array();

    /**
     * Contains a reply to the sender of an item in the Exchange store.
     *
     * @since Exchange 2007
     *
     * @var \jamesiarmes\PhpEws\Type\ReplyToItemType[]
     */
    public $ReplyToItem = array();

    /**
     * Used to suppress read receipts.
     *
     * @since Exchange 2007
     *
     * @var \jamesiarmes\PhpEws\Type\SuppressReadReceiptType[]
     */
    public $SuppressReadReceipt = array();

    /**
     * Represents a task in the Exchange store.
     *
     * @since Exchange 2007
     *
     * @var \jamesiarmes\PhpEws\Type\TaskType[]
     */
    public $Task = array();

    /**
     * Represents a Tentative reply to a meeting request.
     *
     * @since Exchange 2007
     *
     * @var \jamesiarmes\PhpEws\Type\TentativelyAcceptItemType[]
     */
    public $TentativelyAcceptItem = array();
}
