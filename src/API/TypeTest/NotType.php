<?php

namespace jamesiarmes\PEWS\API\TypeTest;

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
     * @property \jamesiarmes\PEWS\API\TypeTest\AndElement[] $and
     */
    protected $and = null;

    /**
     * @property \jamesiarmes\PEWS\API\TypeTest\Not[] $not
     */
    protected $not = null;

    /**
     * @property \jamesiarmes\PEWS\API\TypeTest\OrElement[] $or
     */
    protected $or = null;


}

