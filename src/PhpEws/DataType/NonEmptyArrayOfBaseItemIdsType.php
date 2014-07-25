<?php

namespace PhpEws\DataType;

use PhpEws\DataType;

/**
 * Definition of the NonEmptyArrayOfBaseItemIdsType type
 */
class NonEmptyArrayOfBaseItemIdsType extends DataType
{
    /**
     * ItemId property
     *
     * @var ItemIdType
     */
    public $ItemId;

    /**
     * OccurrenceItemId property
     *
     * @var OccurrenceItemIdType
     */
    public $OccurrenceItemId;

    /**
     * RecurringMasterItemId property
     *
     * @var RecurringMasterItemIdType
     */
    public $RecurringMasterItemId;
}
