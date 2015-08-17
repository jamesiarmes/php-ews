<?php

namespace jamesiarmes\PEWS\API\TypeTest;

use jamesiarmes\PEWS\API\TypeTest;

/**
 * Class representing AggregateOnType
 *
 * Represents the field of each item to aggregate on and the qualifier to apply to that
 *  field in determining which item will represent the group.
 * XSD Type: AggregateOnType
 *
 * @method AggregateOnType getAggregate()
 * @method AggregateOnType setAggregate(string $aggregate)
 * @method AggregateOnType getFieldURI()
 * @method AggregateOnType setFieldURI(PathToUnindexedFieldType $fieldURI)
 * @method AggregateOnType getIndexedFieldURI()
 * @method AggregateOnType setIndexedFieldURI(PathToIndexedFieldType $indexedFieldURI)
 * @method AggregateOnType getExtendedFieldURI()
 * @method AggregateOnType setExtendedFieldURI(PathToExtendedFieldType $extendedFieldURI)
 */
class AggregateOnType extends TypeTest
{

    /**
     * @property string $aggregate
     */
    protected $aggregate = null;

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


}

