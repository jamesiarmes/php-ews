<?php

namespace jamesiarmes\PEWS\API\Type;

/**
 * Class representing ExcludesType
 *
 *
 * XSD Type: ExcludesType
 *
 * @method array getFieldURI()
 * @method ExcludesType setFieldURI(array $fieldURI)
 * @method array getIndexedFieldURI()
 * @method ExcludesType setIndexedFieldURI(array $indexedFieldURI)
 * @method array getExtendedFieldURI()
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
