<?php

namespace jamesiarmes\PEWS\API\Type;

/**
 * Class representing MultipleOperandBooleanExpressionType
 *
 *
 * XSD Type: MultipleOperandBooleanExpressionType
 *
 * @method array getContains()
 * @method MultipleOperandBooleanExpressionType setContains(array $contains)
 * @method array getExcludes()
 * @method MultipleOperandBooleanExpressionType setExcludes(array $excludes)
 * @method array getExists()
 * @method MultipleOperandBooleanExpressionType setExists(array $exists)
 * @method array getIsEqualTo()
 * @method MultipleOperandBooleanExpressionType setIsEqualTo(array $isEqualTo)
 * @method array getIsNotEqualTo()
 * @method MultipleOperandBooleanExpressionType setIsNotEqualTo(array $isNotEqualTo)
 * @method array getIsGreaterThan()
 * @method MultipleOperandBooleanExpressionType setIsGreaterThan(array $isGreaterThan)
 * @method array getIsGreaterThanOrEqualTo()
 * @method MultipleOperandBooleanExpressionType setIsGreaterThanOrEqualTo(array $isGreaterThanOrEqualTo)
 * @method array getIsLessThan()
 * @method MultipleOperandBooleanExpressionType setIsLessThan(array $isLessThan)
 * @method array getIsLessThanOrEqualTo()
 * @method MultipleOperandBooleanExpressionType setIsLessThanOrEqualTo(array $isLessThanOrEqualTo)
 * @method array getAnd()
 * @method MultipleOperandBooleanExpressionType setAnd(array $and)
 * @method array getNot()
 * @method MultipleOperandBooleanExpressionType setNot(array $not)
 * @method array getOr()
 * @method MultipleOperandBooleanExpressionType setOr(array $or)
 */
class MultipleOperandBooleanExpressionType extends SearchExpressionType
{

    /**
     * @var \jamesiarmes\PEWS\API\Type\Contains[]
     */
    protected $contains = null;

    /**
     * @var \jamesiarmes\PEWS\API\Type\Excludes[]
     */
    protected $excludes = null;

    /**
     * @var \jamesiarmes\PEWS\API\Type\Exists[]
     */
    protected $exists = null;

    /**
     * @var \jamesiarmes\PEWS\API\Type\IsEqualTo[]
     */
    protected $isEqualTo = null;

    /**
     * @var \jamesiarmes\PEWS\API\Type\IsNotEqualTo[]
     */
    protected $isNotEqualTo = null;

    /**
     * @var \jamesiarmes\PEWS\API\Type\IsGreaterThan[]
     */
    protected $isGreaterThan = null;

    /**
     * @var \jamesiarmes\PEWS\API\Type\IsGreaterThanOrEqualTo[]
     */
    protected $isGreaterThanOrEqualTo = null;

    /**
     * @var \jamesiarmes\PEWS\API\Type\IsLessThan[]
     */
    protected $isLessThan = null;

    /**
     * @var \jamesiarmes\PEWS\API\Type\IsLessThanOrEqualTo[]
     */
    protected $isLessThanOrEqualTo = null;

    /**
     * @var \jamesiarmes\PEWS\API\Type\AndElement[]
     */
    protected $and = null;

    /**
     * @var \jamesiarmes\PEWS\API\Type\Not[]
     */
    protected $not = null;

    /**
     * @var \jamesiarmes\PEWS\API\Type\OrElement[]
     */
    protected $or = null;
}
