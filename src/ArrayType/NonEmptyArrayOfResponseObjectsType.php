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
     * Represents the response object used to cancel a meeting.
     *
     * @since Exchange 2007
     *
     * @var \jamesiarmes\PhpEws\Type\CalendarItemType[]
     */
    public $CancelCalendarItem = array();

    /**
     * Represents a Decline reply to a meeting request.
     *
     * @since Exchange 2007
     *
     * @var \jamesiarmes\PhpEws\Type\DeclineItemType[]
     */
    public $DeclineItem = array();

    /**
     * Contains an Exchange store item to forward to recipients.
     *
     * @since Exchange 2007
     *
     * @var \jamesiarmes\PhpEws\Type\ForwardItemType[]
     */
    public $ForwardItem = array();

    /**
     * Contains a reply to a post item.
     *
     * @since Exchange 2007 SP1
     *
     * @var \jamesiarmes\PhpEws\Type\PostReplyItemType[]
     */
    public $PostReplyItem = array();

    /**
     * Specifies a response object that indicates that the meeting attendee can
     * propose a new meeting time.
     *
     * @since Exchange 2013 SP1
     *
     * @var \jamesiarmes\PhpEws\Type\ProposeNewTimeType[]
     */
    public $ProposeNewTime = array();

    /**
     * Removes an item from the Exchange store.
     *
     * @since Exchange 2007
     *
     * @var \jamesiarmes\PhpEws\Type\RemoveItemType[]
     */
    public $RemoveItem = array();

    /**
     * Contains a reply to all identified recipients of an item in the Exchange
     * store.
     *
     * @since Exchange 2007
     *
     * @var \jamesiarmes\PhpEws\Type\ReplyAllToItemType[]
     */
    public $ReplyAllToItem = array();

    /**
     * Contains a reply to the creator of an item in the Exchange store.
     *
     * @since Exchange 2007
     *
     * @var \jamesiarmes\PhpEws\Type\ReplyToItemType[]
     */
    public $ReplyToItem = array();

    /**
     * Used to suppress read receipt requests.
     *
     * @since Exchange 2007
     *
     * @var \jamesiarmes\PhpEws\Type\SuppressReadReceiptType[]
     */
    public $SuppressReadReceipt = array();

    /**
     * Represents a Tentative reply to a meeting request.
     *
     * @since Exchange 2007
     *
     * @var \jamesiarmes\PhpEws\Type\TentativelyAcceptItemType[]
     */
    public $TentativelyAcceptItem = array();
}
