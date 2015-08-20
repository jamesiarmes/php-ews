<?php

namespace jamesiarmes\PEWS\API\Type;

/**
 * Class representing NotType
 *
 *
 * XSD Type: NotType
 *
 * @method array getContains()
 * @method NotType setContains(array $contains)
 * @method array getExcludes()
 * @method NotType setExcludes(array $excludes)
 * @method array getExists()
 * @method NotType setExists(array $exists)
 * @method array getIsEqualTo()
 * @method NotType setIsEqualTo(array $isEqualTo)
 * @method array getIsNotEqualTo()
 * @method NotType setIsNotEqualTo(array $isNotEqualTo)
 * @method array getIsGreaterThan()
 * @method NotType setIsGreaterThan(array $isGreaterThan)
 * @method array getIsGreaterThanOrEqualTo()
 * @method NotType setIsGreaterThanOrEqualTo(array $isGreaterThanOrEqualTo)
 * @method array getIsLessThan()
 * @method NotType setIsLessThan(array $isLessThan)
 * @method array getIsLessThanOrEqualTo()
 * @method NotType setIsLessThanOrEqualTo(array $isLessThanOrEqualTo)
 * @method array getAnd()
 * @method NotType setAnd(array $and)
 * @method array getNot()
 * @method NotType setNot(array $not)
 * @method array getOr()
 * @method NotType setOr(array $or)
 */
class NotType extends SearchExpressionType
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
