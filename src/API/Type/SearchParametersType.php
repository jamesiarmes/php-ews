<?php

namespace jamesiarmes\PEWS\API\Type;

use jamesiarmes\PEWS\API\Type;

/**
 * Class representing SearchParametersType
 *
 *
 * XSD Type: SearchParametersType
 *
 * @method SearchParametersType getTraversal()
 * @method SearchParametersType setTraversal(string $traversal)
 * @method SearchParametersType getRestriction()
 * @method SearchParametersType setRestriction(RestrictionType $restriction)
 * @method SearchParametersType getBaseFolderIds()
 * @method SearchParametersType setBaseFolderIds(NonEmptyArrayOfBaseFolderIdsType $baseFolderIds)
 */
class SearchParametersType extends Type
{

    /**
     * @property string $traversal
     */
    protected $traversal = null;

    /**
     * @property \jamesiarmes\PEWS\API\Type\RestrictionType $restriction
     */
    protected $restriction = null;

    /**
     * @property \jamesiarmes\PEWS\API\Type\NonEmptyArrayOfBaseFolderIdsType
     * $baseFolderIds
     */
    protected $baseFolderIds = null;
}
