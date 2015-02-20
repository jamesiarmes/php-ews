<?php
/**
 * Contains ItemChangeType.
 */

namespace jamesiarmes\EWS\Types;

use jamesiarmes\EWS\EWSType;

/**
 * Represents an item identifier and the updates to apply to the item.
 *
 * @package jamesiarmes\EWS\Types
 */
class ItemChangeType extends EWSType
{
    /**
     * Contains the unique identifier and change key of an item in the Exchange
     * store.
     *
     * This element is required if the OccurrenceItemId or RecurringMasterItemId
     * element is not used.
     *
     * @since Exchange 2007
     *
     * @var ItemIdType
     */
    public $ItemId;

    /**
     * Identifies a single occurrence of a recurring item.
     *
     * This element is required if used. This element is required if the
     * RecurringMasterItemId or ItemId element is not used.
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
     * This element is required if used. This element is required if the
     * OccurrenceItemId or ItemId element is not used.
     *
     * @since Exchange 2007
     *
     * @var RecurringMasterItemIdType
     */
    public $RecurringMasterItemId;

    /**
     * Contains an array that defines append, set, and delete changes to item
     * properties.
     *
     * This element is required.
     *
     * @since Exchange 2007
     *
     * @var NonEmptyArrayOfItemChangeDescriptionsType
     */
    public $Updates;
}
