<?php

namespace PhpEws\DataType;

use PhpEws\DataType;

/**
 * Definition of the GroupByType type
 */
class GroupByType extends DataType
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
     * AggregateOn property
     *
     * @var AggregateOnType
     */
    public $AggregateOn;

    /**
     * Order property
     *
     * @var SortDirectionType
     */
    public $Order;
}
