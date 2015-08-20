<?php

namespace jamesiarmes\PEWS\API\Type;

use jamesiarmes\PEWS\API\Type;

/**
 * Class representing DurationType
 *
 *
 * XSD Type: Duration
 *
 * @method \DateTime getStartTime()
 * @method DurationType setStartTime(\DateTime $startTime)
 * @method \DateTime getEndTime()
 * @method DurationType setEndTime(\DateTime $endTime)
 */
class DurationType extends Type
{

    /**
     * @var \DateTime
     */
    protected $startTime = null;

    protected $_typeMap = array(
        'startTime' => 'dateTime',
        'endTime' => 'dateTime',
    );

    /**
     * @var \DateTime
     */
    protected $endTime = null;
}
