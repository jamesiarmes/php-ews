<?php

namespace jamesiarmes\PEWS\API\TypeTest;

/**
 * Class representing ExcludesType
 *
 *
 * XSD Type: ExcludesType
 *
 * @method ExcludesType getFieldURI()
 * @method ExcludesType setFieldURI(array $fieldURI)
 * @method ExcludesType getIndexedFieldURI()
 * @method ExcludesType setIndexedFieldURI(array $indexedFieldURI)
 * @method ExcludesType getExtendedFieldURI()
 * @method ExcludesType setExtendedFieldURI(array $extendedFieldURI)
 * @method ExcludesType getBitmask()
 * @method ExcludesType setBitmask(ExcludesValueType $bitmask)
 */
class ExcludesType extends SearchExpressionType
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

    /**
     * @property \jamesiarmes\PEWS\API\TypeTest\ExcludesValueType $bitmask
     */
    protected $bitmask = null;


}

