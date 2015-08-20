<?php

namespace jamesiarmes\PEWS\API\Type;

use jamesiarmes\PEWS\API\Type;

/**
 * Class representing FieldURIOrConstantType
 *
 *
 * XSD Type: FieldURIOrConstantType
 *
 * @method FieldURI getFieldURI()
 * @method FieldURIOrConstantType setFieldURI(FieldURI $fieldURI)
 * @method IndexedFieldURI getIndexedFieldURI()
 * @method FieldURIOrConstantType setIndexedFieldURI(IndexedFieldURI $indexedFieldURI)
 * @method ExtendedFieldURI getExtendedFieldURI()
 * @method FieldURIOrConstantType setExtendedFieldURI(ExtendedFieldURI $extendedFieldURI)
 * @method ConstantValueType getConstant()
 * @method FieldURIOrConstantType setConstant(ConstantValueType $constant)
 */
class FieldURIOrConstantType extends Type
{

    /**
     * @var \jamesiarmes\PEWS\API\Type\FieldURI
     */
    protected $fieldURI = null;

    /**
     * @var \jamesiarmes\PEWS\API\Type\IndexedFieldURI
     */
    protected $indexedFieldURI = null;

    /**
     * @var \jamesiarmes\PEWS\API\Type\ExtendedFieldURI
     */
    protected $extendedFieldURI = null;

    /**
     * @var \jamesiarmes\PEWS\API\Type\ConstantValueType
     */
    protected $constant = null;
}
