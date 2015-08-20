<?php

namespace jamesiarmes\PEWS\API\Type;

/**
 * Class representing ContainsExpressionType
 *
 *
 * XSD Type: ContainsExpressionType
 *
 * @method ContainsExpressionType getContainmentMode()
 * @method ContainsExpressionType setContainmentMode(string $containmentMode)
 * @method ContainsExpressionType getContainmentComparison()
 * @method ContainsExpressionType setContainmentComparison(string $containmentComparison)
 * @method ContainsExpressionType getFieldURI()
 * @method ContainsExpressionType setFieldURI(array $fieldURI)
 * @method ContainsExpressionType getIndexedFieldURI()
 * @method ContainsExpressionType setIndexedFieldURI(array $indexedFieldURI)
 * @method ContainsExpressionType getExtendedFieldURI()
 * @method ContainsExpressionType setExtendedFieldURI(array $extendedFieldURI)
 * @method ContainsExpressionType getConstant()
 * @method ContainsExpressionType setConstant(ConstantValueType $constant)
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
     * @property \jamesiarmes\PEWS\API\Type\ConstantValueType $constant
     */
    protected $constant = null;


}

