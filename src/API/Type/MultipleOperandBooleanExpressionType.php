<?php

namespace jamesiarmes\PEWS\API\Type;

/**
 * Class representing MultipleOperandBooleanExpressionType
 *
 *
 * XSD Type: MultipleOperandBooleanExpressionType
 *
 * @method MultipleOperandBooleanExpressionType addContains(Contains $contains)
 * @method Contains[] getContains()
 * @method MultipleOperandBooleanExpressionType setContains(array $contains)
 * @method MultipleOperandBooleanExpressionType addExcludes(Excludes $excludes)
 * @method Excludes[] getExcludes()
 * @method MultipleOperandBooleanExpressionType setExcludes(array $excludes)
 * @method MultipleOperandBooleanExpressionType addExists(Exists $exists)
 * @method Exists[] getExists()
 * @method MultipleOperandBooleanExpressionType setExists(array $exists)
 * @method MultipleOperandBooleanExpressionType addIsEqualTo(IsEqualTo $isEqualTo)
 * @method IsEqualTo[] getIsEqualTo()
 * @method MultipleOperandBooleanExpressionType setIsEqualTo(array $isEqualTo)
 * @method MultipleOperandBooleanExpressionType addIsNotEqualTo(IsNotEqualTo $isNotEqualTo)
 * @method IsNotEqualTo[] getIsNotEqualTo()
 * @method MultipleOperandBooleanExpressionType setIsNotEqualTo(array $isNotEqualTo)
 * @method MultipleOperandBooleanExpressionType addIsGreaterThan(IsGreaterThan $isGreaterThan)
 * @method IsGreaterThan[] getIsGreaterThan()
 * @method MultipleOperandBooleanExpressionType setIsGreaterThan(array $isGreaterThan)
 * @method MultipleOperandBooleanExpressionType addIsGreaterThanOrEqualTo(IsGreaterThanOrEqualTo $isGreaterThanOrEqualTo)
 * @method IsGreaterThanOrEqualTo[] getIsGreaterThanOrEqualTo()
 * @method MultipleOperandBooleanExpressionType setIsGreaterThanOrEqualTo(array $isGreaterThanOrEqualTo)
 * @method MultipleOperandBooleanExpressionType addIsLessThan(IsLessThan $isLessThan)
 * @method IsLessThan[] getIsLessThan()
 * @method MultipleOperandBooleanExpressionType setIsLessThan(array $isLessThan)
 * @method MultipleOperandBooleanExpressionType addIsLessThanOrEqualTo(IsLessThanOrEqualTo $isLessThanOrEqualTo)
 * @method IsLessThanOrEqualTo[] getIsLessThanOrEqualTo()
 * @method MultipleOperandBooleanExpressionType setIsLessThanOrEqualTo(array $isLessThanOrEqualTo)
 * @method MultipleOperandBooleanExpressionType addAnd(AndElement $and)
 * @method AndElement[] getAnd()
 * @method MultipleOperandBooleanExpressionType setAnd(array $and)
 * @method MultipleOperandBooleanExpressionType addNot(Not $not)
 * @method Not[] getNot()
 * @method MultipleOperandBooleanExpressionType setNot(array $not)
 * @method MultipleOperandBooleanExpressionType addOr(OrElement $or)
 * @method OrElement[] getOr()
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
