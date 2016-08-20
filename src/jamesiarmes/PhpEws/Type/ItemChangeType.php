<?php
/**
 * Contains \jamesiarmes\PhpEws\Type\ItemChangeType.
 */

namespace jamesiarmes\PhpEws\Type;

use \jamesiarmes\PhpEws\Type;

/**
 * Represents an item identifier and the updates to apply to the item.
 *
 * @package php-ews\Type
 */
class ItemChangeType extends Type
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
     * @var \jamesiarmes\PhpEws\Type\ItemIdType
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
     * @var \jamesiarmes\PhpEws\Type\OccurrenceItemIdType
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
     * @var \jamesiarmes\PhpEws\Type\RecurringMasterItemIdType
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
     * @var \jamesiarmes\PhpEws\ArrayType\NonEmptyArrayOfItemChangeDescriptionsType
     */
    public $Updates;
}
