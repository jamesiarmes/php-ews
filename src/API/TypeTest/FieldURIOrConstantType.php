<?php

namespace jamesiarmes\PEWS\API\TypeTest;

use jamesiarmes\PEWS\API\TypeTest;

/**
 * Class representing FieldURIOrConstantType
 *
 *
 * XSD Type: FieldURIOrConstantType
 *
 * @method FieldURIOrConstantType getFieldURI()
 * @method FieldURIOrConstantType setFieldURI(FieldURI $fieldURI)
 * @method FieldURIOrConstantType getIndexedFieldURI()
 * @method FieldURIOrConstantType setIndexedFieldURI(IndexedFieldURI $indexedFieldURI)
 * @method FieldURIOrConstantType getExtendedFieldURI()
 * @method FieldURIOrConstantType setExtendedFieldURI(ExtendedFieldURI $extendedFieldURI)
 * @method FieldURIOrConstantType getConstant()
 * @method FieldURIOrConstantType setConstant(ConstantValueType $constant)
 */
class FieldURIOrConstantType extends TypeTest
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

