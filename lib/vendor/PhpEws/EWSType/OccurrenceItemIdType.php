<?php
/**
 * Definition of the OccurrenceItemIdType type
 *
 * @package php-ews
 * @subpackage Types
 */

namespace PhpEws\EWSType;

/**
 * Definition of the OccurrenceItemIdType type
 */
class OccurrenceItemIdType extends EWSType
{
    /**
     * RecurringMasterId property
     *
     * @var EWSType_DerivedItemIdType
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
