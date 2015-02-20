<?php
/**
 * Contains RecurringDateTransitionType.
 */

namespace jamesiarmes\EWS\Types;

use jamesiarmes\EWS\EWSType;

/**
 * Represents a time zone transition that occurs on a specific date each year.
 *
 * @package jamesiarmes\EWS\Types
 */
class RecurringDateTransitionType extends EWSType
{
    /**
     * The day of the month on which the time zone transition occurs.
     *
     * @since Exchange 2010
     *
     * @var integer
     */
    public $Day;

    /**
     * The month in which the time zone transition occurs.
     *
     * @since Exchange 2010
     *
     * @var integer
     */
    public $Month;

    /**
     * The duration offset from Coordinated Universal Time (UTC) for the time
     * zone transition.
     *
     * @since Exchange 2010
     *
     * @var string
     */
    public $TimeOffset;

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
