<?php

namespace jamesiarmes\PEWS\API\Type;

use jamesiarmes\PEWS\API\Type;

/**
 * Class representing TimeChangeType
 *
 *
 * XSD Type: TimeChangeType
 *
 * @method TimeChangeType getTimeZoneName()
 * @method TimeChangeType setTimeZoneName(string $timeZoneName)
 * @method TimeChangeType getOffset()
 * @method TimeChangeType setOffset(\DateInterval $offset)
 * @method TimeChangeType getRelativeYearlyRecurrence()
 * @method TimeChangeType setRelativeYearlyRecurrence(RelativeYearlyRecurrencePatternType $relativeYearlyRecurrence)
 * @method TimeChangeType getAbsoluteDate()
 * @method TimeChangeType setAbsoluteDate(\DateTime $absoluteDate)
 * @method TimeChangeType getTime()
 * @method TimeChangeType setTime(\DateTime $time)
 */
class TimeChangeType extends Type
{

    /**
     * @property string $timeZoneName
     */
    protected $timeZoneName = null;

    /**
     * @property \DateInterval $offset
     */
    protected $offset = null;

    /**
     * @property \jamesiarmes\PEWS\API\Type\RelativeYearlyRecurrencePatternType
     * $relativeYearlyRecurrence
     */
    protected $relativeYearlyRecurrence = null;

    /**
     * @property \DateTime $absoluteDate
     */
    protected $absoluteDate = null;

    protected $_typeMap = array(
        'absoluteDate' => 'date',
        'time' => 'time',
    );

    /**
     * @property \DateTime $time
     */
    protected $time = null;


}

