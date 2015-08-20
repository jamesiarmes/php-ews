<?php

namespace jamesiarmes\PEWS\API\Type;

use jamesiarmes\PEWS\API\Type;

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
class FieldURIOrConstantType extends Type
{

    /**
     * @property \jamesiarmes\PEWS\API\Type\FieldURI $fieldURI
     */
    protected $fieldURI = null;

    /**
     * @property \jamesiarmes\PEWS\API\Type\IndexedFieldURI $indexedFieldURI
     */
    protected $indexedFieldURI = null;

    /**
     * @property \jamesiarmes\PEWS\API\Type\ExtendedFieldURI $extendedFieldURI
     */
    protected $extendedFieldURI = null;

    /**
     * @property \jamesiarmes\PEWS\API\Type\ConstantValueType $constant
     */
    protected $constant = null;


}

