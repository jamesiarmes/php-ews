<?php

namespace jamesiarmes\PEWS\API\Type;

/**
 * Class representing TwoOperandExpressionType
 *
 *
 * XSD Type: TwoOperandExpressionType
 *
 * @method array getFieldURI()
 * @method TwoOperandExpressionType setFieldURI(array $fieldURI)
 * @method array getIndexedFieldURI()
 * @method TwoOperandExpressionType setIndexedFieldURI(array $indexedFieldURI)
 * @method array getExtendedFieldURI()
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
