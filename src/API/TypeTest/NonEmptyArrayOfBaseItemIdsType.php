<?php

namespace jamesiarmes\PEWS\API\TypeTest;

use jamesiarmes\PEWS\API\TypeTest;

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
class NonEmptyArrayOfBaseItemIdsType extends TypeTest
{

    /**
     * @property \jamesiarmes\PEWS\API\TypeTest\ItemIdType[] $itemId
     */
    protected $itemId = null;

    /**
     * @property \jamesiarmes\PEWS\API\TypeTest\OccurrenceItemIdType[]
     * $occurrenceItemId
     */
    protected $occurrenceItemId = null;

    /**
     * @property \jamesiarmes\PEWS\API\TypeTest\RecurringMasterItemIdType[]
     * $recurringMasterItemId
     */
    protected $recurringMasterItemId = null;


}

