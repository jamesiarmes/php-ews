<?php

namespace jamesiarmes\PEWS\API\TypeTest;

use jamesiarmes\PEWS\API\Type;

/**
 * Class representing NonEmptyArrayOfBaseItemIdsType
 *
 *
 * XSD Type: NonEmptyArrayOfBaseItemIdsType
 *
 * @method NonEmptyArrayOfBaseItemIdsType getItemId()
 * @method NonEmptyArrayOfBaseItemIdsType setItemId($itemId)
 * @method NonEmptyArrayOfBaseItemIdsType getOccurrenceItemId()
 * @method NonEmptyArrayOfBaseItemIdsType setOccurrenceItemId($occurrenceItemId)
 * @method NonEmptyArrayOfBaseItemIdsType getRecurringMasterItemId()
 * @method NonEmptyArrayOfBaseItemIdsType
 * setRecurringMasterItemId($recurringMasterItemId)
 */
class NonEmptyArrayOfBaseItemIdsType extends Type
{

    /**
     * @property array $itemId
     */
    protected $itemId = null;

    /**
     * @property array $occurrenceItemId
     */
    protected $occurrenceItemId = null;

    /**
     * @property array $recurringMasterItemId
     */
    protected $recurringMasterItemId = null;


}

