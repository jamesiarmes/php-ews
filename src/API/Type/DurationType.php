<?php

namespace jamesiarmes\PEWS\API\Type;

use jamesiarmes\PEWS\API\Type;

/**
 * Class representing DurationType
 *
 *
 * XSD Type: Duration
 *
 * @method DurationType getStartTime()
 * @method DurationType setStartTime(\DateTime $startTime)
 * @method DurationType getEndTime()
 * @method DurationType setEndTime(\DateTime $endTime)
 */
class DurationType extends Type
{

    /**
     * @property \DateTime $startTime
     */
    protected $startTime = null;

    protected $_typeMap = array(
        'startTime' => 'dateTime',
        'endTime' => 'dateTime',
    );

    /**
     * @property \DateTime $endTime
     */
    protected $endTime = null;


}

