<?php

namespace jamesiarmes\PEWS\API\Type;

use jamesiarmes\PEWS\API\Type;

/**
 * Class representing NonEmptyArrayOfBaseItemIdsType
 *
 *
 * XSD Type: NonEmptyArrayOfBaseItemIdsType
 *
 * @method array getItemId()
 * @method NonEmptyArrayOfBaseItemIdsType setItemId(array $itemId)
 * @method array getOccurrenceItemId()
 * @method NonEmptyArrayOfBaseItemIdsType setOccurrenceItemId(array $occurrenceItemId)
 * @method array getRecurringMasterItemId()
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
