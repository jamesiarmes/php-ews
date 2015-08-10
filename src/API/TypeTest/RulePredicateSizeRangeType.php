<?php

namespace jamesiarmes\PEWS\API\TypeTest;

use jamesiarmes\PEWS\API\Type;

/**
 * Class representing RulePredicateSizeRangeType
 *
 * Size range type used for the WithinSizeRange rule predicate.
 * XSD Type: RulePredicateSizeRangeType
 *
 * @method RulePredicateSizeRangeType getMinimumSize()
 * @method RulePredicateSizeRangeType setMinimumSize($minimumSize)
 * @method RulePredicateSizeRangeType getMaximumSize()
 * @method RulePredicateSizeRangeType setMaximumSize($maximumSize)
 */
class RulePredicateSizeRangeType extends Type
{

    /**
     * @property integer $minimumSize
     */
    protected $minimumSize = null;

    /**
     * @property integer $maximumSize
     */
    protected $maximumSize = null;


}

