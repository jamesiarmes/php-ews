<?php
/**
 * Definition of the OccurrenceItemIdType type
 *
 * @package php-ews
* @subpackage Types
 */

namespace EWSType;

use PhpEws;
/**
 * Definition of the OccurrenceItemIdType type
 */
class OccurrenceItemIdType extends PhpEws\EWSType
{
    /**
     * RecurringMasterId property
     *
     * @var DerivedItemIdType
     */
    public $RecurringMasterId;

    /**
     * ChangeKey property
     *
     * @var string
     */
    public $ChangeKey;

    /**
     * InstanceIndex property
     *
     * @var integer
     */
    public $InstanceIndex;
}
