<?php
/**
 * Contains \jamesiarmes\PhpEws\ArrayType\NonEmptyArrayOfResponseObjectsType.
 */

namespace jamesiarmes\PhpEws\ArrayType;

use \jamesiarmes\PhpEws\ArrayType;

/**
 * Represents a collection of all the response objects that are associated with
 * an item in the Exchange store.
 *
 * @package php-ews\Array
 */
class NonEmptyArrayOfResponseObjectsType extends ArrayType
{
    /**
     * Represents an Accept reply to a meeting request.
     *
     * @since Exchange 2007
     *
     * @var \jamesiarmes\PhpEws\Type\AcceptItemType[]
     */
    public $AcceptItem;

    /**
     * Used to accept an invitation that allows access to another user’s
     * calendar or contacts data.
     *
     * @since Exchange 2010
     *
     * @var \jamesiarmes\PhpEws\Type\AcceptSharingInvitationType[]
     */
    public $AcceptSharingInvitation;

    /**
     * Represents the response object used to cancel a meeting.
     *
     * @since Exchange 2007
     *
     * @var \jamesiarmes\PhpEws\Type\CalendarItemType[]
     */
    public $CancelCalendarItem;

    /**
     * Represents a Decline reply to a meeting request.
     *
     * @since Exchange 2007
     *
     * @var \jamesiarmes\PhpEws\Type\DeclineItemType[]
     */
    public $DeclineItem;

    /**
     * Contains an Exchange store item to forward to recipients.
     *
     * @since Exchange 2007
     *
     * @var \jamesiarmes\PhpEws\Type\ForwardItemType[]
     */
    public $ForwardItem;

    /**
     * Contains a reply to a post item.
     *
     * @since Exchange 2007 SP1
     *
     * @var \jamesiarmes\PhpEws\Type\PostReplyItemType[]
     */
    public $PostReplyItem;

    /**
     * Removes an item from the Exchange store.
     *
     * @since Exchange 2007
     *
     * @var \jamesiarmes\PhpEws\Type\RemoveItemType[]
     */
    public $RemoveItem;

    /**
     * Contains a reply to all identified recipients of an item in the Exchange
     * store.
     *
     * @since Exchange 2007
     *
     * @var \jamesiarmes\PhpEws\Type\ReplyAllToItemType[]
     */
    public $ReplyAllToItem;

    /**
     * Contains a reply to the creator of an item in the Exchange store.
     *
     * @since Exchange 2007
     *
     * @var \jamesiarmes\PhpEws\Type\ReplyToItemType[]
     */
    public $ReplyToItem;

    /**
     * Used to suppress read receipt requests.
     *
     * @since Exchange 2007
     *
     * @var \jamesiarmes\PhpEws\Type\SuppressReadReceiptType[]
     */
    public $SuppressReadReceipt;

    /**
     * Represents a Tentative reply to a meeting request.
     *
     * @since Exchange 2007
     *
     * @var \jamesiarmes\PhpEws\Type\TentativelyAcceptItemType[]
     */
    public $TentativelyAcceptItem;
}
