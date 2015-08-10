<?php

namespace jamesiarmes\PEWS\API\TypeTest;

/**
 * Class representing RecurringTimeTransitionType
 *
 *
 * XSD Type: RecurringTimeTransitionType
 *
 * @method RecurringTimeTransitionType getTimeOffset()
 * @method RecurringTimeTransitionType setTimeOffset($timeOffset)
 * @method RecurringTimeTransitionType getMonth()
 * @method RecurringTimeTransitionType setMonth($month)
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

