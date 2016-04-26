<?php

namespace jamesiarmes\PEWS\API\Type;

/**
 * Class representing TwoOperandExpressionType
 *
 *
 * XSD Type: TwoOperandExpressionType
 *
 * @method TwoOperandExpressionType addFieldURI(FieldURI $fieldURI)
 * @method FieldURI[] getFieldURI()
 * @method TwoOperandExpressionType setFieldURI(array $fieldURI)
 * @method TwoOperandExpressionType addIndexedFieldURI(IndexedFieldURI $indexedFieldURI)
 * @method IndexedFieldURI[] getIndexedFieldURI()
 * @method TwoOperandExpressionType setIndexedFieldURI(array $indexedFieldURI)
 * @method TwoOperandExpressionType addExtendedFieldURI(ExtendedFieldURI $extendedFieldURI)
 * @method ExtendedFieldURI[] getExtendedFieldURI()
 * @method TwoOperandExpressionType setExtendedFieldURI(array $extendedFieldURI)
 * @method FieldURIOrConstantType getFieldURIOrConstant()
 * @method TwoOperandExpressionType setFieldURIOrConstant(FieldURIOrConstantType $fieldURIOrConstant)
 */
class TwoOperandExpressionType extends SearchExpressionType
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
     * @var \jamesiarmes\PEWS\API\Type\FieldURIOrConstantType
     */
    protected $fieldURIOrConstant = null;
}
