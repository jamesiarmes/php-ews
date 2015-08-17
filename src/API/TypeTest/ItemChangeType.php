<?php

namespace jamesiarmes\PEWS\API\TypeTest;

use jamesiarmes\PEWS\API\TypeTest;

/**
 * Class representing ItemChangeType
 *
 *
 * XSD Type: ItemChangeType
 *
 * @method ItemChangeType getItemId()
 * @method ItemChangeType setItemId($itemId)
 * @method ItemChangeType getOccurrenceItemId()
 * @method ItemChangeType setOccurrenceItemId($occurrenceItemId)
 * @method ItemChangeType getRecurringMasterItemId()
 * @method ItemChangeType setRecurringMasterItemId($recurringMasterItemId)
 * @method ItemChangeType getUpdates()
 * @method ItemChangeType setUpdates($updates)
 */
class ItemChangeType extends TypeTest
{

    /**
     * @property \jamesiarmes\PEWS\API\TypeTest\ItemIdType $itemId
     */
    protected $itemId = null;

    /**
     * @property \jamesiarmes\PEWS\API\TypeTest\OccurrenceItemIdType $occurrenceItemId
     */
    protected $occurrenceItemId = null;

    /**
     * @property \jamesiarmes\PEWS\API\TypeTest\RecurringMasterItemIdType
     * $recurringMasterItemId
     */
    protected $recurringMasterItemId = null;

    /**
     * @property
     * \jamesiarmes\PEWS\API\TypeTest\NonEmptyArrayOfItemChangeDescriptionsType
     * $updates
     */
    protected $updates = null;


}

