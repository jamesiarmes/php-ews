<?php
/**
 * Contains EWSType_TransitionType.
 */

/**
 * Represents a time zone transition.
 *
 * @package php-ews\Types
 *
 * @todo Alter AbsoluteDateTransitionType, RecurringDayTransitionType and
 * RecurringDateTransitionType to extend this class.
 */
class EWSType_TransitionType extends EWSType
{
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
