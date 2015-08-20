<?php

namespace jamesiarmes\PEWS\API\Type;

use jamesiarmes\PEWS\API\Type;

/**
 * Class representing WorkingPeriodType
 *
 *
 * XSD Type: WorkingPeriod
 *
 * @method array getDayOfWeek()
 * @method WorkingPeriodType setDayOfWeek(array $dayOfWeek)
 * @method integer getStartTimeInMinutes()
 * @method WorkingPeriodType setStartTimeInMinutes(integer $startTimeInMinutes)
 * @method integer getEndTimeInMinutes()
 * @method WorkingPeriodType setEndTimeInMinutes(integer $endTimeInMinutes)
 */
class WorkingPeriodType extends Type
{

    /**
     * @var string[]
     */
    protected $dayOfWeek = null;

    /**
     * @var integer
     */
    protected $startTimeInMinutes = null;

    /**
     * @var integer
     */
    protected $endTimeInMinutes = null;
}
