<?php

namespace jamesiarmes\PEWS\API\Type;

use jamesiarmes\PEWS\API\Type;

/**
 * Class representing NonEmptyArrayOfResponseObjectsType
 *
 *
 * XSD Type: NonEmptyArrayOfResponseObjectsType
 *
 * @method NonEmptyArrayOfResponseObjectsType getAcceptItem()
 * @method NonEmptyArrayOfResponseObjectsType setAcceptItem(array $acceptItem)
 * @method NonEmptyArrayOfResponseObjectsType getTentativelyAcceptItem()
 * @method NonEmptyArrayOfResponseObjectsType setTentativelyAcceptItem(array $tentativelyAcceptItem)
 * @method NonEmptyArrayOfResponseObjectsType getDeclineItem()
 * @method NonEmptyArrayOfResponseObjectsType setDeclineItem(array $declineItem)
 * @method NonEmptyArrayOfResponseObjectsType getReplyToItem()
 * @method NonEmptyArrayOfResponseObjectsType setReplyToItem(array $replyToItem)
 * @method NonEmptyArrayOfResponseObjectsType getForwardItem()
 * @method NonEmptyArrayOfResponseObjectsType setForwardItem(array $forwardItem)
 * @method NonEmptyArrayOfResponseObjectsType getReplyAllToItem()
 * @method NonEmptyArrayOfResponseObjectsType setReplyAllToItem(array $replyAllToItem)
 * @method NonEmptyArrayOfResponseObjectsType getCancelCalendarItem()
 * @method NonEmptyArrayOfResponseObjectsType setCancelCalendarItem(array $cancelCalendarItem)
 * @method NonEmptyArrayOfResponseObjectsType getRemoveItem()
 * @method NonEmptyArrayOfResponseObjectsType setRemoveItem(array $removeItem)
 * @method NonEmptyArrayOfResponseObjectsType getSuppressReadReceipt()
 * @method NonEmptyArrayOfResponseObjectsType setSuppressReadReceipt(array $suppressReadReceipt)
 * @method NonEmptyArrayOfResponseObjectsType getPostReplyItem()
 * @method NonEmptyArrayOfResponseObjectsType setPostReplyItem(array $postReplyItem)
 * @method NonEmptyArrayOfResponseObjectsType getAcceptSharingInvitation()
 * @method NonEmptyArrayOfResponseObjectsType setAcceptSharingInvitation(array $acceptSharingInvitation)
 */
class NonEmptyArrayOfResponseObjectsType extends Type
{

    /**
     * @property \jamesiarmes\PEWS\API\Type\AcceptItemType[] $acceptItem
     */
    protected $acceptItem = null;

    /**
     * @property \jamesiarmes\PEWS\API\Type\TentativelyAcceptItemType[]
     * $tentativelyAcceptItem
     */
    protected $tentativelyAcceptItem = null;

    /**
     * @property \jamesiarmes\PEWS\API\Type\DeclineItemType[] $declineItem
     */
    protected $declineItem = null;

    /**
     * @property \jamesiarmes\PEWS\API\Type\ReplyToItemType[] $replyToItem
     */
    protected $replyToItem = null;

    /**
     * @property \jamesiarmes\PEWS\API\Type\ForwardItemType[] $forwardItem
     */
    protected $forwardItem = null;

    /**
     * @property \jamesiarmes\PEWS\API\Type\ReplyAllToItemType[] $replyAllToItem
     */
    protected $replyAllToItem = null;

    /**
     * @property \jamesiarmes\PEWS\API\Type\CancelCalendarItemType[]
     * $cancelCalendarItem
     */
    protected $cancelCalendarItem = null;

    /**
     * @property \jamesiarmes\PEWS\API\Type\RemoveItemType[] $removeItem
     */
    protected $removeItem = null;

    /**
     * @property \jamesiarmes\PEWS\API\Type\SuppressReadReceiptType[]
     * $suppressReadReceipt
     */
    protected $suppressReadReceipt = null;

    /**
     * @property \jamesiarmes\PEWS\API\Type\PostReplyItemType[] $postReplyItem
     */
    protected $postReplyItem = null;

    /**
     * @property \jamesiarmes\PEWS\API\Type\AcceptSharingInvitationType[]
     * $acceptSharingInvitation
     */
    protected $acceptSharingInvitation = null;


}

