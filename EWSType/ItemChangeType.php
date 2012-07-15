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

    /**
     * Constructor
     */
    public function __construct()
    {
        $this->schema = array(
            array(
                'name' => 'ItemId',
                'required' => false,
                'type' => 'ItemIdType',
            ),
            array(
                'name' => 'OccurrenceItemId',
                'required' => false,
                'type' => 'OccurrenceItemIdType',
            ),
            array(
                'name' => 'RecurringMasterItemId',
                'required' => false,
                'type' => 'RecurringMasterItemIdType',
            ),
            array(
                'name' => 'Updates',
                'required' => false,
                'type' => 'NonEmptyArrayOfItemChangeDescriptionsType',
            ),
        );
    }
}
