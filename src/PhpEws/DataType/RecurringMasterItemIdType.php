<?php

namespace PhpEws\DataType;

use PhpEws\DataType;

/**
 * Definition of the RecurringMasterItemIdType type
 */
class RecurringMasterItemIdType extends DataType
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
