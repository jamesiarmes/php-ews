<?php

namespace PhpEws\DataType;

use PhpEws\DataType;

/**
 * The TransitionsGroups element represents an array of time zone transition
 * groups.
 *
 * Definition of the ArrayOfTransitionsType type.
 */
class ArrayOfTransitionsType extends DataType
{
    /**
     * A string value that represents the unique identifier of the transitions
     * group.
     *
     * @var string
     */
    public $Id;

    /**
     * A time zone transition that occurs on a specific date and at a specific
     * time.
     *
     * @var AbsoluteDateTransitionType
     */
    public $AbsoluteDateTransition;

    /**
     * A time zone transition that occurs on the same day each year.
     *
     * @var RecurringDayTransitionType
     */
    public $RecurringDayTransition;

    /**
     * A time zone transition that occurs on a specified day of the year.
     *
     * @var RecurringDateTransitionType
     */
    public $RecurringDateTransition;

    /**
     * A time zone transition.
     *
     * @var TransitionType
     */
    public $Transition;
}
