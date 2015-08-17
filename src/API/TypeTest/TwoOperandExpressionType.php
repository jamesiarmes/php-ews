<?php

namespace jamesiarmes\PEWS\API\TypeTest;

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
     * @property \jamesiarmes\PEWS\API\TypeTest\FieldURIOrConstantType
     * $fieldURIOrConstant
     */
    protected $fieldURIOrConstant = null;


}

