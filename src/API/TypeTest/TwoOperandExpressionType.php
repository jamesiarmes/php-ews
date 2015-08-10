<?php

namespace jamesiarmes\PEWS\API\TypeTest;

/**
 * Class representing TwoOperandExpressionType
 *
 *
 * XSD Type: TwoOperandExpressionType
 *
 * @method TwoOperandExpressionType getFieldURI()
 * @method TwoOperandExpressionType setFieldURI($fieldURI)
 * @method TwoOperandExpressionType getIndexedFieldURI()
 * @method TwoOperandExpressionType setIndexedFieldURI($indexedFieldURI)
 * @method TwoOperandExpressionType getExtendedFieldURI()
 * @method TwoOperandExpressionType setExtendedFieldURI($extendedFieldURI)
 * @method TwoOperandExpressionType getFieldURIOrConstant()
 * @method TwoOperandExpressionType setFieldURIOrConstant($fieldURIOrConstant)
 */
class TwoOperandExpressionType extends SearchExpressionType
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
     * @property \jamesiarmes\PEWS\API\TypeTest\FieldURIOrConstantType
     * $fieldURIOrConstant
     */
    protected $fieldURIOrConstant = null;


}

