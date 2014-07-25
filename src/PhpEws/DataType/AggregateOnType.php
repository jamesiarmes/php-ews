<?php

namespace PhpEws\DataType;

use PhpEws\DataType;

/**
 * Definition of the AggregateOnType type
 */
class AggregateOnType extends DataType
{
    /**
     * FieldURI property
     *
     * @var PathToUnindexedFieldType
     */
    public $FieldURI;

    /**
     * IndexedFieldURI property
     *
     * @var PathToIndexedFieldType
     */
    public $IndexedFieldURI;

    /**
     * ExtendedFieldURI property
     *
     * @var PathToExtendedFieldType
     */
    public $ExtendedFieldURI;

    /**
     * Aggregate property
     *
     * @var AggregateType
     */
    public $Aggregate;
}
