<?php

namespace jamesiarmes\PEWS\API\Type;

use jamesiarmes\PEWS\API\Type;

/**
 * Class representing TimeChangeType
 *
 *
 * XSD Type: TimeChangeType
 *
 * @method string getTimeZoneName()
 * @method TimeChangeType setTimeZoneName(string $timeZoneName)
 * @method \DateInterval getOffset()
 * @method TimeChangeType setOffset(\DateInterval $offset)
 * @method RelativeYearlyRecurrencePatternType getRelativeYearlyRecurrence()
 * @method TimeChangeType setRelativeYearlyRecurrence(RelativeYearlyRecurrencePatternType $relativeYearlyRecurrence)
 * @method \DateTime getAbsoluteDate()
 * @method TimeChangeType setAbsoluteDate(\DateTime $absoluteDate)
 * @method \DateTime getTime()
 * @method TimeChangeType setTime(\DateTime $time)
 */
class TimeChangeType extends Type
{

    /**
     * @var string
     */
    protected $timeZoneName = null;

    /**
     * @var \DateInterval
     */
    protected $offset = null;

    /**
     * @var \jamesiarmes\PEWS\API\Type\RelativeYearlyRecurrencePatternType
     */
    protected $relativeYearlyRecurrence = null;

    /**
     * @var \DateTime
     */
    protected $absoluteDate = null;

    protected $_typeMap = array(
        'absoluteDate' => 'date',
        'time' => 'time',
    );

    /**
     * @var \DateTime
     */
    protected $time = null;
}
