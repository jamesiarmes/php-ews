<?php

namespace jamesiarmes\PEWS\API\Type;

/**
 * Class representing ContainsExpressionType
 *
 *
 * XSD Type: ContainsExpressionType
 *
 * @method string getContainmentMode()
 * @method ContainsExpressionType setContainmentMode(string $containmentMode)
 * @method string getContainmentComparison()
 * @method ContainsExpressionType setContainmentComparison(string $containmentComparison)
 * @method array getFieldURI()
 * @method ContainsExpressionType setFieldURI(array $fieldURI)
 * @method array getIndexedFieldURI()
 * @method ContainsExpressionType setIndexedFieldURI(array $indexedFieldURI)
 * @method array getExtendedFieldURI()
 * @method ContainsExpressionType setExtendedFieldURI(array $extendedFieldURI)
 * @method ConstantValueType getConstant()
 * @method ContainsExpressionType setConstant(ConstantValueType $constant)
 */
class ContainsExpressionType extends SearchExpressionType
{

    /**
     * @var string
     */
    protected $containmentMode = null;

    /**
     * @var string
     */
    protected $containmentComparison = null;

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
     * @var \jamesiarmes\PEWS\API\Type\ConstantValueType
     */
    protected $constant = null;
}
