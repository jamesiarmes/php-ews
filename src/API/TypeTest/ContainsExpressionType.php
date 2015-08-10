<?php

namespace jamesiarmes\PEWS\API\TypeTest;

/**
 * Class representing ContainsExpressionType
 *
 *
 * XSD Type: ContainsExpressionType
 *
 * @method ContainsExpressionType getContainmentMode()
 * @method ContainsExpressionType setContainmentMode($containmentMode)
 * @method ContainsExpressionType getContainmentComparison()
 * @method ContainsExpressionType setContainmentComparison($containmentComparison)
 * @method ContainsExpressionType getFieldURI()
 * @method ContainsExpressionType setFieldURI($fieldURI)
 * @method ContainsExpressionType getIndexedFieldURI()
 * @method ContainsExpressionType setIndexedFieldURI($indexedFieldURI)
 * @method ContainsExpressionType getExtendedFieldURI()
 * @method ContainsExpressionType setExtendedFieldURI($extendedFieldURI)
 * @method ContainsExpressionType getConstant()
 * @method ContainsExpressionType setConstant($constant)
 */
class ContainsExpressionType extends SearchExpressionType
{

    /**
     * @property string $containmentMode
     */
    protected $containmentMode = null;

    /**
     * @property string $containmentComparison
     */
    protected $containmentComparison = null;

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
     * @property \jamesiarmes\PEWS\API\TypeTest\ConstantValueType $constant
     */
    protected $constant = null;


}

