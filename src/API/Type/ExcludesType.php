<?php

namespace jamesiarmes\PEWS\API\Type;

/**
 * Class representing ExcludesType
 *
 *
 * XSD Type: ExcludesType
 *
 * @method ExcludesType addFieldURI(FieldURI $fieldURI)
 * @method FieldURI[] getFieldURI()
 * @method ExcludesType setFieldURI(array $fieldURI)
 * @method ExcludesType addIndexedFieldURI(IndexedFieldURI $indexedFieldURI)
 * @method IndexedFieldURI[] getIndexedFieldURI()
 * @method ExcludesType setIndexedFieldURI(array $indexedFieldURI)
 * @method ExcludesType addExtendedFieldURI(ExtendedFieldURI $extendedFieldURI)
 * @method ExtendedFieldURI[] getExtendedFieldURI()
 * @method ExcludesType setExtendedFieldURI(array $extendedFieldURI)
 * @method ExcludesValueType getBitmask()
 * @method ExcludesType setBitmask(ExcludesValueType $bitmask)
 */
class ExcludesType extends SearchExpressionType
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

    /**
     * @var \jamesiarmes\PEWS\API\Type\ExcludesValueType
     */
    protected $bitmask = null;
}
