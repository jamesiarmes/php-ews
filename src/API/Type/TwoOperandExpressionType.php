<?php

namespace jamesiarmes\PEWS\API\Type;

/**
 * Class representing TwoOperandExpressionType
 *
 *
 * XSD Type: TwoOperandExpressionType
 *
 * @method TwoOperandExpressionType getFieldURI()
 * @method TwoOperandExpressionType setFieldURI(array $fieldURI)
 * @method TwoOperandExpressionType getIndexedFieldURI()
 * @method TwoOperandExpressionType setIndexedFieldURI(array $indexedFieldURI)
 * @method TwoOperandExpressionType getExtendedFieldURI()
 * @method TwoOperandExpressionType setExtendedFieldURI(array $extendedFieldURI)
 * @method TwoOperandExpressionType getFieldURIOrConstant()
 * @method TwoOperandExpressionType setFieldURIOrConstant(FieldURIOrConstantType $fieldURIOrConstant)
 */
class TwoOperandExpressionType extends SearchExpressionType
{

    /**
     * @property \jamesiarmes\PEWS\API\Type\FieldURI[] $fieldURI
     */
    protected $fieldURI = null;

    /**
     * @property \jamesiarmes\PEWS\API\Type\IndexedFieldURI[] $indexedFieldURI
     */
    protected $indexedFieldURI = null;

    /**
     * @property \jamesiarmes\PEWS\API\Type\ExtendedFieldURI[] $extendedFieldURI
     */
    protected $extendedFieldURI = null;

    /**
     * @property \jamesiarmes\PEWS\API\Type\FieldURIOrConstantType $fieldURIOrConstant
     */
    protected $fieldURIOrConstant = null;
}
