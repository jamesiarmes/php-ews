<?php
/**
 * Contains NonEmptyArrayOfBaseItemIdsType.
 */

namespace jamesiarmes\EWS\Types;

use jamesiarmes\EWS\EWSType;

/**
 * Represents the unique identities of items, occurrence items, and recurring
 * master items that are used to delete, send, get, move, or copy items in the
 * Exchange store.
 *
 * @package jamesiarmes\EWS\Types
 */
class NonEmptyArrayOfBaseItemIdsType extends EWSType
{
    /**
     * Contains the unique identifier and change key of an item in the Exchange
     * store.
     *
     * @since Exchange 2007
     *
     * @var ItemIdType
     */
    public $ItemId;

    /**
     * Identifies a single occurrence of a recurring item.
     *
     * @since Exchange 2007
     *
     * @var OccurrenceItemIdType
     */
    public $OccurrenceItemId;

    /**
     * Identifies a recurrence master item by identifying one of its related
     * occurrence items' identifiers.
     *
     * @since Exchange 2007
     *
     * @var RecurringMasterItemIdType
     */
    public $RecurringMasterItemId;
}
