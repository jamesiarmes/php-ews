<?php
/**
 * Definition of the NonEmptyArrayOfBaseItemIdsType type
 *
 * @package php-ews
 * @subpackage Types
 */

/**
 * Definition of the NonEmptyArrayOfBaseItemIdsType type
 */
class EWSType_NonEmptyArrayOfBaseItemIdsType extends EWSType
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
