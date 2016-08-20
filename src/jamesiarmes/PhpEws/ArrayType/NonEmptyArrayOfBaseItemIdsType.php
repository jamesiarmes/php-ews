<?php
/**
 * Contains \jamesiarmes\PhpEws\ArrayType\NonEmptyArrayOfBaseItemIdsType.
 */

namespace jamesiarmes\PhpEws\ArrayType;

use \jamesiarmes\PhpEws\ArrayType;

/**
 * Represents the unique identities of items, occurrence items, and recurring
 * master items that are used to delete, send, get, move, or copy items in the
 * Exchange store.
 *
 * @package php-ews\Array
 */
class NonEmptyArrayOfBaseItemIdsType extends ArrayType
{
    /**
     * Contains the unique identifier and change key of an item in the Exchange
     * store.
     *
     * @since Exchange 2007
     *
     * @var \jamesiarmes\PhpEws\Type\ItemIdType[]
     */
    public $ItemId;

    /**
     * Identifies a single occurrence of a recurring item.
     *
     * @since Exchange 2007
     *
     * @var \jamesiarmes\PhpEws\Type\OccurrenceItemIdType[]
     */
    public $OccurrenceItemId;

    /**
     * Identifies a recurrence master item by identifying one of its related
     * occurrence items' identifiers.
     *
     * @since Exchange 2007
     *
     * @var \jamesiarmes\PhpEws\Type\RecurringMasterItemIdType[]
     */
    public $RecurringMasterItemId;
}
