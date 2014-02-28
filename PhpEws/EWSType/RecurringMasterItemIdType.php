<?php
/**
 * Definition of the RecurringMasterItemIdType type
 *
 * @package php-ews
* @subpackage Types
 */

namespace EWSType;

use PhpEws;
/**
 * Definition of the RecurringMasterItemIdType type
 */
class RecurringMasterItemIdType extends PhpEws\EWSType
{
    /**
     * OccurrenceId property
     *
     * @var DerivedItemIdType
     */
    public $OccurrenceId;

    /**
     * ChangeKey property
     *
     * @var string
     */
    public $ChangeKey;
}
