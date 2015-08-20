<?php

namespace jamesiarmes\PEWS\API\Type;

use jamesiarmes\PEWS\API\Type;

/**
 * Class representing RestrictionType
 *
 *
 * XSD Type: RestrictionType
 *
 * @method RestrictionType addContains(Contains $contains)
 * @method Contains[] getContains()
 * @method RestrictionType setContains(array $contains)
 * @method RestrictionType addExcludes(Excludes $excludes)
 * @method Excludes[] getExcludes()
 * @method RestrictionType setExcludes(array $excludes)
 * @method RestrictionType addExists(Exists $exists)
 * @method Exists[] getExists()
 * @method RestrictionType setExists(array $exists)
 * @method RestrictionType addIsEqualTo(IsEqualTo $isEqualTo)
 * @method IsEqualTo[] getIsEqualTo()
 * @method RestrictionType setIsEqualTo(array $isEqualTo)
 * @method RestrictionType addIsNotEqualTo(IsNotEqualTo $isNotEqualTo)
 * @method IsNotEqualTo[] getIsNotEqualTo()
 * @method RestrictionType setIsNotEqualTo(array $isNotEqualTo)
 * @method RestrictionType addIsGreaterThan(IsGreaterThan $isGreaterThan)
 * @method IsGreaterThan[] getIsGreaterThan()
 * @method RestrictionType setIsGreaterThan(array $isGreaterThan)
 * @method RestrictionType addIsGreaterThanOrEqualTo(IsGreaterThanOrEqualTo $isGreaterThanOrEqualTo)
 * @method IsGreaterThanOrEqualTo[] getIsGreaterThanOrEqualTo()
 * @method RestrictionType setIsGreaterThanOrEqualTo(array $isGreaterThanOrEqualTo)
 * @method RestrictionType addIsLessThan(IsLessThan $isLessThan)
 * @method IsLessThan[] getIsLessThan()
 * @method RestrictionType setIsLessThan(array $isLessThan)
 * @method RestrictionType addIsLessThanOrEqualTo(IsLessThanOrEqualTo $isLessThanOrEqualTo)
 * @method IsLessThanOrEqualTo[] getIsLessThanOrEqualTo()
 * @method RestrictionType setIsLessThanOrEqualTo(array $isLessThanOrEqualTo)
 * @method RestrictionType addAnd(AndElement $and)
 * @method AndElement[] getAnd()
 * @method RestrictionType setAnd(array $and)
 * @method RestrictionType addNot(Not $not)
 * @method Not[] getNot()
 * @method RestrictionType setNot(array $not)
 * @method RestrictionType addOr(OrElement $or)
 * @method OrElement[] getOr()
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
