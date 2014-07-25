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

    /**
     * Updates property
     *
     * @var EWSType_NonEmptyArrayOfItemChangeDescriptionsType
     */
    public $Updates;
}
