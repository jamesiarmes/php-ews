<?php

namespace jamesiarmes\PEWS\API\Type;

use jamesiarmes\PEWS\API\Type;

/**
 * Class representing NonEmptyArrayOfBaseItemIdsType
 *
 *
 * XSD Type: NonEmptyArrayOfBaseItemIdsType
 *
 * @method NonEmptyArrayOfBaseItemIdsType getItemId()
 * @method NonEmptyArrayOfBaseItemIdsType setItemId(array $itemId)
 * @method NonEmptyArrayOfBaseItemIdsType getOccurrenceItemId()
 * @method NonEmptyArrayOfBaseItemIdsType setOccurrenceItemId(array $occurrenceItemId)
 * @method NonEmptyArrayOfBaseItemIdsType getRecurringMasterItemId()
 * @method NonEmptyArrayOfBaseItemIdsType setRecurringMasterItemId(array $recurringMasterItemId)
 */
class NonEmptyArrayOfBaseItemIdsType extends Type
{

    /**
     * @property \jamesiarmes\PEWS\API\Type\ItemIdType[] $itemId
     */
    protected $itemId = null;

    /**
     * @property \jamesiarmes\PEWS\API\Type\OccurrenceItemIdType[] $occurrenceItemId
     */
    protected $occurrenceItemId = null;

    /**
     * @property \jamesiarmes\PEWS\API\Type\RecurringMasterItemIdType[]
     * $recurringMasterItemId
     */
    protected $recurringMasterItemId = null;
}
