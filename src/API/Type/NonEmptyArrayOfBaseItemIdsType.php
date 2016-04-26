<?php

namespace jamesiarmes\PEWS\API\Type;

use jamesiarmes\PEWS\API\Type;

/**
 * Class representing NonEmptyArrayOfBaseItemIdsType
 *
 *
 * XSD Type: NonEmptyArrayOfBaseItemIdsType
 *
 * @method NonEmptyArrayOfBaseItemIdsType addItemId(ItemIdType $itemId)
 * @method ItemIdType[] getItemId()
 * @method NonEmptyArrayOfBaseItemIdsType setItemId(array $itemId)
 * @method NonEmptyArrayOfBaseItemIdsType addOccurrenceItemId(OccurrenceItemIdType $occurrenceItemId)
 * @method OccurrenceItemIdType[] getOccurrenceItemId()
 * @method NonEmptyArrayOfBaseItemIdsType setOccurrenceItemId(array $occurrenceItemId)
 * @method NonEmptyArrayOfBaseItemIdsType addRecurringMasterItemId(RecurringMasterItemIdType $recurringMasterItemId)
 * @method RecurringMasterItemIdType[] getRecurringMasterItemId()
 * @method NonEmptyArrayOfBaseItemIdsType setRecurringMasterItemId(array $recurringMasterItemId)
 */
class NonEmptyArrayOfBaseItemIdsType extends Type
{

    /**
     * @var \jamesiarmes\PEWS\API\Type\ItemIdType[]
     */
    protected $itemId = null;

    /**
     * @var \jamesiarmes\PEWS\API\Type\OccurrenceItemIdType[]
     */
    protected $occurrenceItemId = null;

    /**
     * @var \jamesiarmes\PEWS\API\Type\RecurringMasterItemIdType[]
     */
    protected $recurringMasterItemId = null;
}
