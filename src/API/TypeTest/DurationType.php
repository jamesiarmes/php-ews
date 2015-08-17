<?php

namespace jamesiarmes\PEWS\API\TypeTest;

use jamesiarmes\PEWS\API\TypeTest;

/**
 * Class representing DurationType
 *
 *
 * XSD Type: Duration
 *
 * @method DurationType getStartTime()
 * @method DurationType setStartTime($startTime)
 * @method DurationType getEndTime()
 * @method DurationType setEndTime($endTime)
 */
class DurationType extends TypeTest
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

