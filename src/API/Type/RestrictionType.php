<?php

namespace jamesiarmes\PEWS\API\Type;

use jamesiarmes\PEWS\API\Type;

/**
 * Class representing RestrictionType
 *
 *
 * XSD Type: RestrictionType
 *
 * @method RestrictionType getContains()
 * @method RestrictionType setContains(array $contains)
 * @method RestrictionType getExcludes()
 * @method RestrictionType setExcludes(array $excludes)
 * @method RestrictionType getExists()
 * @method RestrictionType setExists(array $exists)
 * @method RestrictionType getIsEqualTo()
 * @method RestrictionType setIsEqualTo(array $isEqualTo)
 * @method RestrictionType getIsNotEqualTo()
 * @method RestrictionType setIsNotEqualTo(array $isNotEqualTo)
 * @method RestrictionType getIsGreaterThan()
 * @method RestrictionType setIsGreaterThan(array $isGreaterThan)
 * @method RestrictionType getIsGreaterThanOrEqualTo()
 * @method RestrictionType setIsGreaterThanOrEqualTo(array $isGreaterThanOrEqualTo)
 * @method RestrictionType getIsLessThan()
 * @method RestrictionType setIsLessThan(array $isLessThan)
 * @method RestrictionType getIsLessThanOrEqualTo()
 * @method RestrictionType setIsLessThanOrEqualTo(array $isLessThanOrEqualTo)
 * @method RestrictionType getAnd()
 * @method RestrictionType setAnd(array $and)
 * @method RestrictionType getNot()
 * @method RestrictionType setNot(array $not)
 * @method RestrictionType getOr()
 * @method RestrictionType setOr(array $or)
 */
class RestrictionType extends Type
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

