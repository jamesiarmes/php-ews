<?php

namespace jamesiarmes\PEWS\API\TypeTest;

use jamesiarmes\PEWS\API\Type;

/**
 * Class representing FieldURIOrConstantType
 *
 *
 * XSD Type: FieldURIOrConstantType
 *
 * @method FieldURIOrConstantType getFieldURI()
 * @method FieldURIOrConstantType setFieldURI($fieldURI)
 * @method FieldURIOrConstantType getIndexedFieldURI()
 * @method FieldURIOrConstantType setIndexedFieldURI($indexedFieldURI)
 * @method FieldURIOrConstantType getExtendedFieldURI()
 * @method FieldURIOrConstantType setExtendedFieldURI($extendedFieldURI)
 * @method FieldURIOrConstantType getConstant()
 * @method FieldURIOrConstantType setConstant($constant)
 */
class FieldURIOrConstantType extends Type
{

    /**
     * @property \jamesiarmes\PEWS\API\TypeTest\FieldURI $fieldURI
     */
    protected $fieldURI = null;

    /**
     * @property \jamesiarmes\PEWS\API\TypeTest\IndexedFieldURI $indexedFieldURI
     */
    protected $indexedFieldURI = null;

    /**
     * @property \jamesiarmes\PEWS\API\TypeTest\ExtendedFieldURI $extendedFieldURI
     */
    protected $extendedFieldURI = null;

    /**
     * @property \jamesiarmes\PEWS\API\TypeTest\ConstantValueType $constant
     */
    protected $constant = null;


}

