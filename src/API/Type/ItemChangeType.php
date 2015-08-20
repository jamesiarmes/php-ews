<?php

namespace jamesiarmes\PEWS\API\Type;

use jamesiarmes\PEWS\API\Type;

/**
 * Class representing ItemChangeType
 *
 *
 * XSD Type: ItemChangeType
 *
 * @method ItemIdType getItemId()
 * @method ItemChangeType setItemId(ItemIdType $itemId)
 * @method OccurrenceItemIdType getOccurrenceItemId()
 * @method ItemChangeType setOccurrenceItemId(OccurrenceItemIdType $occurrenceItemId)
 * @method RecurringMasterItemIdType getRecurringMasterItemId()
 * @method ItemChangeType setRecurringMasterItemId(RecurringMasterItemIdType $recurringMasterItemId)
 * @method NonEmptyArrayOfItemChangeDescriptionsType getUpdates()
 * @method ItemChangeType setUpdates(NonEmptyArrayOfItemChangeDescriptionsType $updates)
 */
class ItemChangeType extends Type
{

    /**
     * @var \jamesiarmes\PEWS\API\Type\ItemIdType
     */
    protected $itemId = null;

    /**
     * @var \jamesiarmes\PEWS\API\Type\OccurrenceItemIdType
     */
    protected $occurrenceItemId = null;

    /**
     * @var \jamesiarmes\PEWS\API\Type\RecurringMasterItemIdType
     */
    protected $recurringMasterItemId = null;

    /**
     * @var \jamesiarmes\PEWS\API\Type\NonEmptyArrayOfItemChangeDescriptionsType
     */
    protected $updates = null;
}
