<?php

namespace jamesiarmes\PEWS\API\Type;

/**
 * Class representing NotType
 *
 *
 * XSD Type: NotType
 *
 * @method NotType getContains()
 * @method NotType setContains(array $contains)
 * @method NotType getExcludes()
 * @method NotType setExcludes(array $excludes)
 * @method NotType getExists()
 * @method NotType setExists(array $exists)
 * @method NotType getIsEqualTo()
 * @method NotType setIsEqualTo(array $isEqualTo)
 * @method NotType getIsNotEqualTo()
 * @method NotType setIsNotEqualTo(array $isNotEqualTo)
 * @method NotType getIsGreaterThan()
 * @method NotType setIsGreaterThan(array $isGreaterThan)
 * @method NotType getIsGreaterThanOrEqualTo()
 * @method NotType setIsGreaterThanOrEqualTo(array $isGreaterThanOrEqualTo)
 * @method NotType getIsLessThan()
 * @method NotType setIsLessThan(array $isLessThan)
 * @method NotType getIsLessThanOrEqualTo()
 * @method NotType setIsLessThanOrEqualTo(array $isLessThanOrEqualTo)
 * @method NotType getAnd()
 * @method NotType setAnd(array $and)
 * @method NotType getNot()
 * @method NotType setNot(array $not)
 * @method NotType getOr()
 * @method NotType setOr(array $or)
 */
class NotType extends SearchExpressionType
{

    /**
     * @property \jamesiarmes\PEWS\API\Type\Contains[] $contains
     */
    protected $contains = null;

    /**
     * @property \jamesiarmes\PEWS\API\Type\Excludes[] $excludes
     */
    protected $excludes = null;

    /**
     * @property \jamesiarmes\PEWS\API\Type\Exists[] $exists
     */
    protected $exists = null;

    /**
     * @property \jamesiarmes\PEWS\API\Type\IsEqualTo[] $isEqualTo
     */
    protected $isEqualTo = null;

    /**
     * @property \jamesiarmes\PEWS\API\Type\IsNotEqualTo[] $isNotEqualTo
     */
    protected $isNotEqualTo = null;

    /**
     * @property \jamesiarmes\PEWS\API\Type\IsGreaterThan[] $isGreaterThan
     */
    protected $isGreaterThan = null;

    /**
     * @property \jamesiarmes\PEWS\API\Type\IsGreaterThanOrEqualTo[]
     * $isGreaterThanOrEqualTo
     */
    protected $isGreaterThanOrEqualTo = null;

    /**
     * @property \jamesiarmes\PEWS\API\Type\IsLessThan[] $isLessThan
     */
    protected $isLessThan = null;

    /**
     * @property \jamesiarmes\PEWS\API\Type\IsLessThanOrEqualTo[] $isLessThanOrEqualTo
     */
    protected $isLessThanOrEqualTo = null;

    /**
     * @property \jamesiarmes\PEWS\API\Type\AndElement[] $and
     */
    protected $and = null;

    /**
     * @property \jamesiarmes\PEWS\API\Type\Not[] $not
     */
    protected $not = null;

    /**
     * @property \jamesiarmes\PEWS\API\Type\OrElement[] $or
     */
    protected $or = null;
}
