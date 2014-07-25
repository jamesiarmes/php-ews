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
     * @var EWSType_ItemIdType
     */
    public $ItemId;

    /**
     * OccurrenceItemId property
     *
     * @var EWSType_OccurrenceItemIdType
     */
    public $OccurrenceItemId;

    /**
     * RecurringMasterItemId property
     *
     * @var EWSType_RecurringMasterItemIdType
     */
    public $RecurringMasterItemId;
}
