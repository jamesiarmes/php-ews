<?php

namespace jamesiarmes\PEWS\API\TypeTest;

/**
 * Class representing GroupByType
 *
 * Allows consumers to specify arbitrary groupings for FindItem queries.
 * XSD Type: GroupByType
 *
 * @method GroupByType getFieldURI()
 * @method GroupByType setFieldURI(PathToUnindexedFieldType $fieldURI)
 * @method GroupByType getIndexedFieldURI()
 * @method GroupByType setIndexedFieldURI(PathToIndexedFieldType $indexedFieldURI)
 * @method GroupByType getExtendedFieldURI()
 * @method GroupByType setExtendedFieldURI(PathToExtendedFieldType $extendedFieldURI)
 * @method GroupByType getAggregateOn()
 * @method GroupByType setAggregateOn(AggregateOnType $aggregateOn)
 */
class GroupByType extends BaseGroupByType
{

    /**
     * @property \jamesiarmes\PEWS\API\TypeTest\PathToUnindexedFieldType $fieldURI
     */
    protected $fieldURI = null;

    /**
     * @property \jamesiarmes\PEWS\API\TypeTest\PathToIndexedFieldType $indexedFieldURI
     */
    protected $indexedFieldURI = null;

    /**
     * @property \jamesiarmes\PEWS\API\TypeTest\PathToExtendedFieldType
     * $extendedFieldURI
     */
    protected $extendedFieldURI = null;

    /**
     * @property \jamesiarmes\PEWS\API\TypeTest\AggregateOnType $aggregateOn
     */
    protected $aggregateOn = null;


}

