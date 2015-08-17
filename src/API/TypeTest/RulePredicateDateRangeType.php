<?php

namespace jamesiarmes\PEWS\API\TypeTest;

use jamesiarmes\PEWS\API\TypeTest;

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
class RulePredicateDateRangeType extends TypeTest
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

