<?php
/**
 * Definition of the NonEmptyArrayOfResponseObjectsType type
 *
 * @package php-ews
 * @subpackage Types
 */

/**
 * Definition of the NonEmptyArrayOfResponseObjectsType type
 */
class EWSType_NonEmptyArrayOfResponseObjectsType extends EWSType
{
    /**
     * AcceptItem property
     *
     * @var EWSType_AcceptItemType
     */
    public $AcceptItem;

    /**
     * TentativelyAcceptItem property
     *
     * @var EWSType_TentativelyAcceptItemType
     */
    public $TentativelyAcceptItem;

    /**
     * DeclineItem property
     *
     * @var EWSType_DeclineItemType
     */
    public $DeclineItem;

    /**
     * ReplyToItem property
     *
     * @var EWSType_ReplyToItemType
     */
    public $ReplyToItem;

    /**
     * ForwardItem property
     *
     * @var EWSType_ForwardItemType
     */
    public $ForwardItem;

    /**
     * ReplyAllToItem property
     *
     * @var EWSType_ReplyAllToItemType
     */
    public $ReplyAllToItem;

    /**
     * CancelCalendarItem property
     *
     * @var EWSType_CancelCalendarItemType
     */
    public $CancelCalendarItem;

    /**
     * RemoveItem property
     *
     * @var EWSType_RemoveItemType
     */
    public $RemoveItem;

    /**
     * SuppressReadReceipt property
     *
     * @var EWSType_SuppressReadReceiptType
     */
    public $SuppressReadReceipt;

    /**
     * PostReplyItem property
     *
     * @var EWSType_PostReplyItemType
     */
    public $PostReplyItem;
}
