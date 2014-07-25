<?php

namespace PhpEws\DataType;

use PhpEws\DataType;

/**
 * The AbsoluteDateTransition element represents a time zone transition that
 * occurs on a specific date and at a specific time.
 *
 * @package php-ews
 * @subpackage Types
 */

/**
 * Definition of the AbsoluteDateTransitionType type.
 */
class AbsoluteDateTransitionType extends DataType
{
    /**
     * Specifies the Period or TransitionsGroup that is the target of the time
     * zone transition.
     *
     * @var TransitionTargetType
     */
    public $To;

    /**
     * Represents the date and time at which the time zone transition occurs.
     *
     * @var string
     */
    public $DateTime;
}
