<?php

namespace jamesiarmes\PEWS\API\TypeTest;

/**
 * Class representing RecurringTimeTransitionType
 *
 *
 * XSD Type: RecurringTimeTransitionType
 *
 * @method RecurringTimeTransitionType getTimeOffset()
 * @method RecurringTimeTransitionType setTimeOffset(\DateInterval $timeOffset)
 * @method RecurringTimeTransitionType getMonth()
 * @method RecurringTimeTransitionType setMonth(integer $month)
 */
class RecurringTimeTransitionType extends TransitionType
{

    /**
     * @property \DateInterval $timeOffset
     */
    protected $timeOffset = null;

    /**
     * @property integer $month
     */
    protected $month = null;


}

