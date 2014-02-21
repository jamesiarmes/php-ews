<?php
/**
 * Definition of the NonEmptyArrayOfBaseItemIdsType type
 *
 * @package php-ews
* @subpackage Types
 */

namespace EWSType;

use PhpEws;
/**
 * Definition of the NonEmptyArrayOfBaseItemIdsType type
 */
class NonEmptyArrayOfBaseItemIdsType extends PhpEws\EWSType
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
