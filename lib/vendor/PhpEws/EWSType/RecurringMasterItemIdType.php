<?php
/**
 * Definition of the RecurringMasterItemIdType type
 *
 * @package php-ews
 * @subpackage Types
 */

namespace \PhpEws\EWSType;

/**
 * Definition of the RecurringMasterItemIdType type
 */
class RecurringMasterItemIdType extends EWSType
{
    /**
     * OccurrenceId property
     *
     * @var EWSType_DerivedItemIdType
     */
    public $OccurrenceId;

    /**
     * ChangeKey property
     *
     * @var string
     */
    public $ChangeKey;
}
