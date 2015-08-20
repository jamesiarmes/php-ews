<?php

namespace jamesiarmes\PEWS\API\Type;

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
     * @property \jamesiarmes\PEWS\API\Type\FieldURI[] $fieldURI
     */
    protected $fieldURI = null;

    /**
     * @property \jamesiarmes\PEWS\API\Type\IndexedFieldURI[] $indexedFieldURI
     */
    protected $indexedFieldURI = null;

    /**
     * @property \jamesiarmes\PEWS\API\Type\ExtendedFieldURI[] $extendedFieldURI
     */
    protected $extendedFieldURI = null;


}

