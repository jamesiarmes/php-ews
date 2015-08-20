<?php

namespace jamesiarmes\PEWS\API\Type;

/**
 * Class representing EndDateRecurrenceRangeType
 *
 *
 * XSD Type: EndDateRecurrenceRangeType
 *
 * @method \DateTime getEndDate()
 * @method EndDateRecurrenceRangeType setEndDate(\DateTime $endDate)
 */
class EndDateRecurrenceRangeType extends RecurrenceRangeBaseType
{

    /**
     * @var \DateTime
     */
    protected $endDate = null;

    protected $_typeMap = array(
        'endDate' => 'date',
    );
}
