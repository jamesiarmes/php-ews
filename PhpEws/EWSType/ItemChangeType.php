<?php
/**
 * Definition of the ItemChangeType type
 *
 * @package php-ews
* @subpackage Types
 */

namespace EWSType;

use PhpEws;
/**
 * Definition of the ItemChangeType type
 */
class ItemChangeType extends PhpEws\EWSType
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
