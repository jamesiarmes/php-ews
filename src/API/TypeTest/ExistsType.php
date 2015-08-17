<?php

namespace jamesiarmes\PEWS\API\TypeTest;

/**
 * Class representing ExistsType
 *
 *
 * XSD Type: ExistsType
 *
 * @method ExistsType getFieldURI()
 * @method ExistsType setFieldURI(array $fieldURI)
 * @method ExistsType getIndexedFieldURI()
 * @method ExistsType setIndexedFieldURI(array $indexedFieldURI)
 * @method ExistsType getExtendedFieldURI()
 * @method ExistsType setExtendedFieldURI(array $extendedFieldURI)
 */
class ExistsType extends SearchExpressionType
{

    /**
     * @property \jamesiarmes\PEWS\API\TypeTest\FieldURI[] $fieldURI
     */
    protected $fieldURI = null;

    /**
     * @property \jamesiarmes\PEWS\API\TypeTest\IndexedFieldURI[] $indexedFieldURI
     */
    protected $indexedFieldURI = null;

    /**
     * @property \jamesiarmes\PEWS\API\TypeTest\ExtendedFieldURI[] $extendedFieldURI
     */
    protected $extendedFieldURI = null;


}

