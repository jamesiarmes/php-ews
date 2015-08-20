<?php

namespace jamesiarmes\PEWS\API\Type;

use jamesiarmes\PEWS\API\Type;

/**
 * Class representing RulePredicateSizeRangeType
 *
 * Size range type used for the WithinSizeRange rule predicate.
 * XSD Type: RulePredicateSizeRangeType
 *
 * @method integer getMinimumSize()
 * @method RulePredicateSizeRangeType setMinimumSize(integer $minimumSize)
 * @method integer getMaximumSize()
 * @method RulePredicateSizeRangeType setMaximumSize(integer $maximumSize)
 */
class RulePredicateSizeRangeType extends Type
{

    /**
     * @var integer
     */
    protected $minimumSize = null;

    /**
     * @var integer
     */
    protected $maximumSize = null;
}
