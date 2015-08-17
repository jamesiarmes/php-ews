<?php

namespace jamesiarmes\PEWS\API\TypeTest;

/**
 * Class representing MultipleOperandBooleanExpressionType
 *
 *
 * XSD Type: MultipleOperandBooleanExpressionType
 *
 * @method MultipleOperandBooleanExpressionType getContains()
 * @method MultipleOperandBooleanExpressionType setContains(array $contains)
 * @method MultipleOperandBooleanExpressionType getExcludes()
 * @method MultipleOperandBooleanExpressionType setExcludes(array $excludes)
 * @method MultipleOperandBooleanExpressionType getExists()
 * @method MultipleOperandBooleanExpressionType setExists(array $exists)
 * @method MultipleOperandBooleanExpressionType getIsEqualTo()
 * @method MultipleOperandBooleanExpressionType setIsEqualTo(array $isEqualTo)
 * @method MultipleOperandBooleanExpressionType getIsNotEqualTo()
 * @method MultipleOperandBooleanExpressionType setIsNotEqualTo(array $isNotEqualTo)
 * @method MultipleOperandBooleanExpressionType getIsGreaterThan()
 * @method MultipleOperandBooleanExpressionType setIsGreaterThan(array $isGreaterThan)
 * @method MultipleOperandBooleanExpressionType getIsGreaterThanOrEqualTo()
 * @method MultipleOperandBooleanExpressionType setIsGreaterThanOrEqualTo(array $isGreaterThanOrEqualTo)
 * @method MultipleOperandBooleanExpressionType getIsLessThan()
 * @method MultipleOperandBooleanExpressionType setIsLessThan(array $isLessThan)
 * @method MultipleOperandBooleanExpressionType getIsLessThanOrEqualTo()
 * @method MultipleOperandBooleanExpressionType setIsLessThanOrEqualTo(array $isLessThanOrEqualTo)
 * @method MultipleOperandBooleanExpressionType getAnd()
 * @method MultipleOperandBooleanExpressionType setAnd(array $and)
 * @method MultipleOperandBooleanExpressionType getNot()
 * @method MultipleOperandBooleanExpressionType setNot(array $not)
 * @method MultipleOperandBooleanExpressionType getOr()
 * @method MultipleOperandBooleanExpressionType setOr(array $or)
 */
class MultipleOperandBooleanExpressionType extends SearchExpressionType
{

    /**
     * @property \jamesiarmes\PEWS\API\TypeTest\Contains[] $contains
     */
    protected $contains = null;

    /**
     * @property \jamesiarmes\PEWS\API\TypeTest\Excludes[] $excludes
     */
    protected $excludes = null;

    /**
     * @property \jamesiarmes\PEWS\API\TypeTest\Exists[] $exists
     */
    protected $exists = null;

    /**
     * @property \jamesiarmes\PEWS\API\TypeTest\IsEqualTo[] $isEqualTo
     */
    protected $isEqualTo = null;

    /**
     * @property \jamesiarmes\PEWS\API\TypeTest\IsNotEqualTo[] $isNotEqualTo
     */
    protected $isNotEqualTo = null;

    /**
     * @property \jamesiarmes\PEWS\API\TypeTest\IsGreaterThan[] $isGreaterThan
     */
    protected $isGreaterThan = null;

    /**
     * @property \jamesiarmes\PEWS\API\TypeTest\IsGreaterThanOrEqualTo[]
     * $isGreaterThanOrEqualTo
     */
    protected $isGreaterThanOrEqualTo = null;

    /**
     * @property \jamesiarmes\PEWS\API\TypeTest\IsLessThan[] $isLessThan
     */
    protected $isLessThan = null;

    /**
     * @property \jamesiarmes\PEWS\API\TypeTest\IsLessThanOrEqualTo[]
     * $isLessThanOrEqualTo
     */
    protected $isLessThanOrEqualTo = null;

    /**
     * @property \jamesiarmes\PEWS\API\TypeTest\And[] $and
     */
    protected $and = null;

    /**
     * @property \jamesiarmes\PEWS\API\TypeTest\Not[] $not
     */
    protected $not = null;

    /**
     * @property \jamesiarmes\PEWS\API\TypeTest\Or[] $or
     */
    protected $or = null;


}

