<?php

namespace jamesiarmes\PEWS\API\TypeTest;

use jamesiarmes\PEWS\API\TypeTest;

/**
 * Class representing TimeChangeType
 *
 *
 * XSD Type: TimeChangeType
 *
 * @method TimeChangeType getTimeZoneName()
 * @method TimeChangeType setTimeZoneName($timeZoneName)
 * @method TimeChangeType getOffset()
 * @method TimeChangeType setOffset($offset)
 * @method TimeChangeType getRelativeYearlyRecurrence()
 * @method TimeChangeType setRelativeYearlyRecurrence($relativeYearlyRecurrence)
 * @method TimeChangeType getAbsoluteDate()
 * @method TimeChangeType setAbsoluteDate($absoluteDate)
 * @method TimeChangeType getTime()
 * @method TimeChangeType setTime($time)
 */
class TimeChangeType extends TypeTest
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
     * @property \jamesiarmes\PEWS\API\TypeTest\RelativeYearlyRecurrencePatternType
     * $relativeYearlyRecurrence
     */
    protected $relativeYearlyRecurrence = null;

    /**
     * @property \DateTime $absoluteDate
     */
    protected $absoluteDate = null;

    /**
     * @property \DateTime $time
     */
    protected $time = null;


}

