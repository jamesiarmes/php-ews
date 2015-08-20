<?php

namespace jamesiarmes\PEWS\API\Type;

use jamesiarmes\PEWS\API\Type;

/**
 * Class representing NonEmptyArrayOfResponseObjectsType
 *
 *
 * XSD Type: NonEmptyArrayOfResponseObjectsType
 *
 * @method array getAcceptItem()
 * @method NonEmptyArrayOfResponseObjectsType setAcceptItem(array $acceptItem)
 * @method array getTentativelyAcceptItem()
 * @method NonEmptyArrayOfResponseObjectsType setTentativelyAcceptItem(array $tentativelyAcceptItem)
 * @method array getDeclineItem()
 * @method NonEmptyArrayOfResponseObjectsType setDeclineItem(array $declineItem)
 * @method array getReplyToItem()
 * @method NonEmptyArrayOfResponseObjectsType setReplyToItem(array $replyToItem)
 * @method array getForwardItem()
 * @method NonEmptyArrayOfResponseObjectsType setForwardItem(array $forwardItem)
 * @method array getReplyAllToItem()
 * @method NonEmptyArrayOfResponseObjectsType setReplyAllToItem(array $replyAllToItem)
 * @method array getCancelCalendarItem()
 * @method NonEmptyArrayOfResponseObjectsType setCancelCalendarItem(array $cancelCalendarItem)
 * @method array getRemoveItem()
 * @method NonEmptyArrayOfResponseObjectsType setRemoveItem(array $removeItem)
 * @method array getSuppressReadReceipt()
 * @method NonEmptyArrayOfResponseObjectsType setSuppressReadReceipt(array $suppressReadReceipt)
 * @method array getPostReplyItem()
 * @method NonEmptyArrayOfResponseObjectsType setPostReplyItem(array $postReplyItem)
 * @method array getAcceptSharingInvitation()
 * @method NonEmptyArrayOfResponseObjectsType setAcceptSharingInvitation(array $acceptSharingInvitation)
 */
class NonEmptyArrayOfResponseObjectsType extends Type
{

    /**
     * @var \jamesiarmes\PEWS\API\Type\AcceptItemType[]
     */
    protected $acceptItem = null;

    /**
     * @var \jamesiarmes\PEWS\API\Type\TentativelyAcceptItemType[]
     */
    protected $tentativelyAcceptItem = null;

    /**
     * @var \jamesiarmes\PEWS\API\Type\DeclineItemType[]
     */
    protected $declineItem = null;

    /**
     * @var \jamesiarmes\PEWS\API\Type\ReplyToItemType[]
     */
    protected $replyToItem = null;

    /**
     * @var \jamesiarmes\PEWS\API\Type\ForwardItemType[]
     */
    protected $forwardItem = null;

    /**
     * @var \jamesiarmes\PEWS\API\Type\ReplyAllToItemType[]
     */
    protected $replyAllToItem = null;

    /**
     * @var \jamesiarmes\PEWS\API\Type\CancelCalendarItemType[]
     */
    protected $cancelCalendarItem = null;

    /**
     * @var \jamesiarmes\PEWS\API\Type\RemoveItemType[]
     */
    protected $removeItem = null;

    /**
     * @var \jamesiarmes\PEWS\API\Type\SuppressReadReceiptType[]
     */
    protected $suppressReadReceipt = null;

    /**
     * @var \jamesiarmes\PEWS\API\Type\PostReplyItemType[]
     */
    protected $postReplyItem = null;

    /**
     * @var \jamesiarmes\PEWS\API\Type\AcceptSharingInvitationType[]
     */
    protected $acceptSharingInvitation = null;
}
