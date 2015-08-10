<?php

namespace jamesiarmes\PEWS\API\TypeTest;

/**
 * Class representing ExcludesType
 *
 *
 * XSD Type: ExcludesType
 *
 * @method ExcludesType getFieldURI()
 * @method ExcludesType setFieldURI($fieldURI)
 * @method ExcludesType getIndexedFieldURI()
 * @method ExcludesType setIndexedFieldURI($indexedFieldURI)
 * @method ExcludesType getExtendedFieldURI()
 * @method ExcludesType setExtendedFieldURI($extendedFieldURI)
 * @method ExcludesType getBitmask()
 * @method ExcludesType setBitmask($bitmask)
 */
class ExcludesType extends SearchExpressionType
{

    /**
     * @property array $fieldURI
     */
    protected $fieldURI = null;

    /**
     * @property array $indexedFieldURI
     */
    protected $indexedFieldURI = null;

    /**
     * @property array $extendedFieldURI
     */
    protected $extendedFieldURI = null;

    /**
     * @property \jamesiarmes\PEWS\API\TypeTest\ExcludesValueType $bitmask
     */
    protected $bitmask = null;


}

