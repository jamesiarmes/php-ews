<?php

namespace jamesiarmes\PEWS\API\TypeTest;

use jamesiarmes\PEWS\API\TypeTest;

/**
 * Class representing RecurrenceRangeBaseType
 *
 *
 * XSD Type: RecurrenceRangeBaseType
 *
 * @method RecurrenceRangeBaseType getStartDate()
 * @method RecurrenceRangeBaseType setStartDate($startDate)
 */
class RecurrenceRangeBaseType extends TypeTest
{

    /**
     * @property \DateTime $startDate
     */
    protected $startDate = null;

    protected $_typeMap = array(
        'startDate' => 'date',
    );


}

