<?php
/**
 * Definition of the ItemChangeType type
 *
 * @package php-ews
 * @subpackage Types
 */

/**
 * Definition of the ItemChangeType type
 */
class EWSType_ItemChangeType extends EWSType
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
