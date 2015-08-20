<?php

namespace jamesiarmes\PEWS\API\Type;

/**
 * Class representing RecurringTimeTransitionType
 *
 *
 * XSD Type: RecurringTimeTransitionType
 *
 * @method \DateInterval getTimeOffset()
 * @method RecurringTimeTransitionType setTimeOffset(\DateInterval $timeOffset)
 * @method integer getMonth()
 * @method RecurringTimeTransitionType setMonth(integer $month)
 */
class RecurringTimeTransitionType extends TransitionType
{

    /**
     * @var \DateInterval
     */
    protected $timeOffset = null;

    /**
     * @var integer
     */
    protected $month = null;
}
