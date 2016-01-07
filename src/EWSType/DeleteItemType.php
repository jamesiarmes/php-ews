<?php
/**
 * Contains EWSType_DeleteItemType.
 */

/**
 * Defines a request to delete an item from a mailbox in the Exchange store.
 *
 * @package php-ews\Types
 *
 * @todo Extend EWSType_BaseRequestType.
 */
class EWSType_DeleteItemType extends EWSType
{
    /**
     * Describes whether a task instance or a task master is deleted by a
     * DeleteItem operation.
     *
     * This attribute is required when tasks are deleted.
     *
     * This attribute is optional when non-task items are deleted.
     *
     * @since Exchange 2007
     *
     * @var EWSType_AffectedTaskOccurrencesType
     */
    public $AffectedTaskOccurrences;

    /**
     * Describes how an item is deleted.
     *
     * This attribute is required.
     *
     * @since Exchange 2007
     *
     * @var EWSType_DisposalType
     */
    public $DeleteType;

    /**
     * Contains an array of items, occurrence items, and recurring master items
     * to delete from a mailbox in the Exchange store.
     *
     * The DeleteItem operation can be performed on any item type.
     *
     * @since Exchange 2007
     *
     * @var EWSType_NonEmptyArrayOfBaseItemIdsType
     */
    public $ItemIds;

    /**
     * Describes whether a calendar item deletion is communicated to attendees.
     *
     * This attribute is required when calendar items are deleted.
     *
     * This attribute is optional if non-calendar items are deleted.
     *
     * @since Exchange 2007
     *
     * @var EWSType_CalendarItemCreateOrDeleteOperationType
     */
    public $SendMeetingCancellations;

    /**
     * Indicates whether read receipts for the deleted item are suppressed.
     *
     * A value of true indicates that the read receipts are suppressed. A value
     * of false indicates that the read receipts are sent to the sender.
     *
     * This attribute is optional.
     *
     * @since Exchange 2013
     *
     * @var boolean
     */
    public $SuppressReadReceipts;
}
