<?php
/**
 * Contains EWSType_AbsoluteDateTransitionType.
 */

/**
 * Represents a time zone transition that occurs on a specific date and at a
 * specific time.
 *
 * @package php-ews\Types
 */
class EWSType_AbsoluteDateTransitionType extends EWSType
{
    /**
     * Represents the date and time at which the time zone transition occurs.
     *
     * @since Exchange 2010
     *
     * @var string
     *
     * @todo Make a DateTime object.
     */
    public $DateTime;

    /**
     * Specifies the Period or TransitionsGroup that is the target of the time
     * zone transition.
     *
     * @since Exchange 2010
     *
     * @var EWSType_TransitionTargetType
     */
    public $To;
}
