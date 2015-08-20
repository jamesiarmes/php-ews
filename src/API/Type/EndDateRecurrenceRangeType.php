<?php

namespace jamesiarmes\PEWS\API\Type;

/**
 * Class representing EndDateRecurrenceRangeType
 *
 *
 * XSD Type: EndDateRecurrenceRangeType
 *
 * @method EndDateRecurrenceRangeType getEndDate()
 * @method EndDateRecurrenceRangeType setEndDate(\DateTime $endDate)
 */
class EndDateRecurrenceRangeType extends RecurrenceRangeBaseType
{

    /**
     * @property \DateTime $endDate
     */
    protected $endDate = null;

    protected $_typeMap = array(
        'endDate' => 'date',
    );
}
