<?php

namespace PhpEws\DataType;

use PhpEws\DataType;

/**
 * Definition of the OccurrenceInfoType type
 */
class OccurrenceInfoType extends DataType
{
    /**
     * ItemId property
     *
     * @var ItemIdType
     */
    public $ItemId;

    /**
     * Start property
     *
     * @var dateTime
     */
    public $Start;

    /**
     * End property
     *
     * @var dateTime
     */
    public $End;

    /**
     * OriginalStart property
     *
     * @var dateTime
     */
    public $OriginalStart;
}
