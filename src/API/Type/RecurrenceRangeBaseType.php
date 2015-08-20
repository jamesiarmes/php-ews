<?php

namespace jamesiarmes\PEWS\API\Type;

use jamesiarmes\PEWS\API\Type;

/**
 * Class representing RecurrenceRangeBaseType
 *
 *
 * XSD Type: RecurrenceRangeBaseType
 *
 * @method RecurrenceRangeBaseType getStartDate()
 * @method RecurrenceRangeBaseType setStartDate(\DateTime $startDate)
 */
class RecurrenceRangeBaseType extends Type
{

    /**
     * @property \DateTime $startDate
     */
    protected $startDate = null;

    protected $_typeMap = array(
        'startDate' => 'date',
    );


}

