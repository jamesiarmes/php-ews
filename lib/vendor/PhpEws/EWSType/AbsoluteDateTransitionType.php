<?php
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
class EWSType_AbsoluteDateTransitionType extends EWSType
{
    /**
     * Specifies the Period or TransitionsGroup that is the target of the time
     * zone transition.
     *
     * @var EWSType_TransitionTargetType
     */
    public $To;

    /**
     * Represents the date and time at which the time zone transition occurs.
     *
     * @var string
     */
    public $DateTime;
}
