<?php

namespace jamesiarmes\PEWS\API\Type;

use jamesiarmes\PEWS\API\Type;

/**
 * Class representing RestrictionType
 *
 *
 * XSD Type: RestrictionType
 *
 * @method array getContains()
 * @method RestrictionType setContains(array $contains)
 * @method array getExcludes()
 * @method RestrictionType setExcludes(array $excludes)
 * @method array getExists()
 * @method RestrictionType setExists(array $exists)
 * @method array getIsEqualTo()
 * @method RestrictionType setIsEqualTo(array $isEqualTo)
 * @method array getIsNotEqualTo()
 * @method RestrictionType setIsNotEqualTo(array $isNotEqualTo)
 * @method array getIsGreaterThan()
 * @method RestrictionType setIsGreaterThan(array $isGreaterThan)
 * @method array getIsGreaterThanOrEqualTo()
 * @method RestrictionType setIsGreaterThanOrEqualTo(array $isGreaterThanOrEqualTo)
 * @method array getIsLessThan()
 * @method RestrictionType setIsLessThan(array $isLessThan)
 * @method array getIsLessThanOrEqualTo()
 * @method RestrictionType setIsLessThanOrEqualTo(array $isLessThanOrEqualTo)
 * @method array getAnd()
 * @method RestrictionType setAnd(array $and)
 * @method array getNot()
 * @method RestrictionType setNot(array $not)
 * @method array getOr()
 * @method RestrictionType setOr(array $or)
 */
class RestrictionType extends Type
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
