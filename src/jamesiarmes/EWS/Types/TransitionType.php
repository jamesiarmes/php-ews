<?php
/**
 * Contains TransitionType.
 */

namespace jamesiarmes\EWS\Types;

use jamesiarmes\EWS\EWSType;

/**
 * Represents a time zone transition.
 *
 * @package jamesiarmes\EWS\Types
 *
 * @todo Alter AbsoluteDateTransitionType, RecurringDayTransitionType and
 * RecurringDateTransitionType to extend this class.
 */
class TransitionType extends EWSType
{
    /**
     * Specifies the Period or TransitionsGroup that is the target of the time
     * zone transition.
     *
     * @since Exchange 2010
     *
     * @var TransitionTargetType
     */
    public $To;
}
