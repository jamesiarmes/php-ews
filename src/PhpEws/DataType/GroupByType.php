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
     * @var EWSType_PathToUnindexedFieldType
     */
    public $FieldURI;

    /**
     * IndexedFieldURI property
     *
     * @var EWSType_PathToIndexedFieldType
     */
    public $IndexedFieldURI;

    /**
     * ExtendedFieldURI property
     *
     * @var EWSType_PathToExtendedFieldType
     */
    public $ExtendedFieldURI;

    /**
     * AggregateOn property
     *
     * @var EWSType_AggregateOnType
     */
    public $AggregateOn;

    /**
     * Order property
     *
     * @var EWSType_SortDirectionType
     */
    public $Order;
}
