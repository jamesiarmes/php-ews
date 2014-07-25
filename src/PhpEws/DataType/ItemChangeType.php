<?php

namespace PhpEws\DataType;

use PhpEws\DataType;

/**
 * Definition of the ItemChangeType type
 */
class ItemChangeType extends DataType
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

    /**
     * Updates property
     *
     * @var NonEmptyArrayOfItemChangeDescriptionsType
     */
    public $Updates;
}
