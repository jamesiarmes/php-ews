<?php

namespace jamesiarmes\PEWS\API\TypeTest;

use jamesiarmes\PEWS\API\Type;

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
class DurationType extends Type
{

    /**
     * @property \DateTime $startTime
     */
    protected $startTime = null;

    /**
     * @property \DateTime $endTime
     */
    protected $endTime = null;


}

