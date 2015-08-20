<?php

namespace jamesiarmes\PEWS\API\Type;

/**
 * Class representing ExistsType
 *
 *
 * XSD Type: ExistsType
 *
 * @method array getFieldURI()
 * @method ExistsType setFieldURI(array $fieldURI)
 * @method array getIndexedFieldURI()
 * @method ExistsType setIndexedFieldURI(array $indexedFieldURI)
 * @method array getExtendedFieldURI()
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
