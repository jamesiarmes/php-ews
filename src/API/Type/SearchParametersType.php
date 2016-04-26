<?php

namespace jamesiarmes\PEWS\API\Type;

use jamesiarmes\PEWS\API\Type;

/**
 * Class representing SearchParametersType
 *
 *
 * XSD Type: SearchParametersType
 *
 * @method string getTraversal()
 * @method SearchParametersType setTraversal(string $traversal)
 * @method RestrictionType getRestriction()
 * @method SearchParametersType setRestriction(RestrictionType $restriction)
 * @method NonEmptyArrayOfBaseFolderIdsType getBaseFolderIds()
 * @method SearchParametersType setBaseFolderIds(NonEmptyArrayOfBaseFolderIdsType $baseFolderIds)
 */
class SearchParametersType extends Type
{

    /**
     * @var string
     */
    protected $traversal = null;

    /**
     * @var \jamesiarmes\PEWS\API\Type\RestrictionType
     */
    protected $restriction = null;

    /**
     * @var \jamesiarmes\PEWS\API\Type\NonEmptyArrayOfBaseFolderIdsType
     */
    protected $baseFolderIds = null;
}
