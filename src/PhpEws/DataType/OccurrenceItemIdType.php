<?php

namespace PhpEws\DataType;

use PhpEws\DataType;

/**
 * Definition of the OccurrenceItemIdType type
 */
class OccurrenceItemIdType extends DataType
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
