<?php

namespace jamesiarmes\PEWS\API\Type;

/**
 * Class representing ExistsType
 *
 *
 * XSD Type: ExistsType
 *
 * @method ExistsType addFieldURI(FieldURI $fieldURI)
 * @method FieldURI[] getFieldURI()
 * @method ExistsType setFieldURI(array $fieldURI)
 * @method ExistsType addIndexedFieldURI(IndexedFieldURI $indexedFieldURI)
 * @method IndexedFieldURI[] getIndexedFieldURI()
 * @method ExistsType setIndexedFieldURI(array $indexedFieldURI)
 * @method ExistsType addExtendedFieldURI(ExtendedFieldURI $extendedFieldURI)
 * @method ExtendedFieldURI[] getExtendedFieldURI()
 * @method ExistsType setExtendedFieldURI(array $extendedFieldURI)
 */
class ExistsType extends SearchExpressionType
{

    /**
     * @var \jamesiarmes\PEWS\API\Type\FieldURI[]
     */
    protected $fieldURI = null;

    /**
     * @var \jamesiarmes\PEWS\API\Type\IndexedFieldURI[]
     */
    protected $indexedFieldURI = null;

    /**
     * @var \jamesiarmes\PEWS\API\Type\ExtendedFieldURI[]
     */
    protected $extendedFieldURI = null;
}
