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
     * @var \DateTime
     */
    public $Start;

    /**
     * End property
     *
     * @var \DateTime
     */
    public $End;

    /**
     * OriginalStart property
     *
     * @var \DateTime
     */
    public $OriginalStart;
}
