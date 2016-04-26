<?php

namespace jamesiarmes\PEWS\API\Type;

/**
 * Class representing GroupByType
 *
 * Allows consumers to specify arbitrary groupings for FindItem queries.
 * XSD Type: GroupByType
 *
 * @method PathToUnindexedFieldType getFieldURI()
 * @method GroupByType setFieldURI(PathToUnindexedFieldType $fieldURI)
 * @method PathToIndexedFieldType getIndexedFieldURI()
 * @method GroupByType setIndexedFieldURI(PathToIndexedFieldType $indexedFieldURI)
 * @method PathToExtendedFieldType getExtendedFieldURI()
 * @method GroupByType setExtendedFieldURI(PathToExtendedFieldType $extendedFieldURI)
 * @method AggregateOnType getAggregateOn()
 * @method GroupByType setAggregateOn(AggregateOnType $aggregateOn)
 */
class GroupByType extends BaseGroupByType
{

    /**
     * @var \jamesiarmes\PEWS\API\Type\PathToUnindexedFieldType
     */
    protected $fieldURI = null;

    /**
     * @var \jamesiarmes\PEWS\API\Type\PathToIndexedFieldType
     */
    protected $indexedFieldURI = null;

    /**
     * @var \jamesiarmes\PEWS\API\Type\PathToExtendedFieldType
     */
    protected $extendedFieldURI = null;

    /**
     * @var \jamesiarmes\PEWS\API\Type\AggregateOnType
     */
    protected $aggregateOn = null;
}
