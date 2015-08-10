<?php

namespace jamesiarmes\PEWS\API\TypeTest;

use jamesiarmes\PEWS\API\Type;

/**
 * Class representing SearchParametersType
 *
 *
 * XSD Type: SearchParametersType
 *
 * @method SearchParametersType getTraversal()
 * @method SearchParametersType setTraversal($traversal)
 * @method SearchParametersType getRestriction()
 * @method SearchParametersType setRestriction($restriction)
 * @method SearchParametersType getBaseFolderIds()
 * @method SearchParametersType setBaseFolderIds($baseFolderIds)
 */
class SearchParametersType extends Type
{

    /**
     * @property string $traversal
     */
    protected $traversal = null;

    /**
     * @property \jamesiarmes\PEWS\API\TypeTest\RestrictionType $restriction
     */
    protected $restriction = null;

    /**
     * @property \jamesiarmes\PEWS\API\TypeTest\NonEmptyArrayOfBaseFolderIdsType
     * $baseFolderIds
     */
    protected $baseFolderIds = null;


}

