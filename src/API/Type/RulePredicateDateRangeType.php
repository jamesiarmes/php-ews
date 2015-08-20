<?php

namespace jamesiarmes\PEWS\API\Type;

use jamesiarmes\PEWS\API\Type;

/**
 * Class representing RulePredicateDateRangeType
 *
 * Date range type used for the WithinDateRange rule predicate.
 * XSD Type: RulePredicateDateRangeType
 *
 * @method RulePredicateDateRangeType getStartDateTime()
 * @method RulePredicateDateRangeType setStartDateTime(\DateTime $startDateTime)
 * @method RulePredicateDateRangeType getEndDateTime()
 * @method RulePredicateDateRangeType setEndDateTime(\DateTime $endDateTime)
 */
class RulePredicateDateRangeType extends Type
{

    /**
     * @property \DateTime $startDateTime
     */
    protected $startDateTime = null;

    protected $_typeMap = array(
        'startDateTime' => 'dateTime',
        'endDateTime' => 'dateTime',
    );

    /**
     * @property \DateTime $endDateTime
     */
    protected $endDateTime = null;


}

