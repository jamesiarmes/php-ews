<?php

namespace jamesiarmes\PEWS\API\Type;

use jamesiarmes\PEWS\API\Type;

/**
 * Class representing ItemChangeType
 *
 *
 * XSD Type: ItemChangeType
 *
 * @method ItemChangeType getItemId()
 * @method ItemChangeType setItemId(ItemIdType $itemId)
 * @method ItemChangeType getOccurrenceItemId()
 * @method ItemChangeType setOccurrenceItemId(OccurrenceItemIdType $occurrenceItemId)
 * @method ItemChangeType getRecurringMasterItemId()
 * @method ItemChangeType setRecurringMasterItemId(RecurringMasterItemIdType $recurringMasterItemId)
 * @method ItemChangeType getUpdates()
 * @method ItemChangeType setUpdates(NonEmptyArrayOfItemChangeDescriptionsType $updates)
 */
class ItemChangeType extends Type
{

    /**
     * @property \jamesiarmes\PEWS\API\Type\ItemIdType $itemId
     */
    protected $itemId = null;

    /**
     * @property \jamesiarmes\PEWS\API\Type\OccurrenceItemIdType $occurrenceItemId
     */
    protected $occurrenceItemId = null;

    /**
     * @property \jamesiarmes\PEWS\API\Type\RecurringMasterItemIdType
     * $recurringMasterItemId
     */
    protected $recurringMasterItemId = null;

    /**
     * @property \jamesiarmes\PEWS\API\Type\NonEmptyArrayOfItemChangeDescriptionsType
     * $updates
     */
    protected $updates = null;
}
