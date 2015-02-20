<?php
/**
 * Contains ArrayOfTransitionsType.
 */

namespace jamesiarmes\EWS\Types;

use jamesiarmes\EWS\EWSType;

/**
 * Represents an array of time zone transitions.
 *
 * @package jamesiarmes\EWS\Types
 */
class ArrayOfTransitionsType extends EWSType
{
    /**
     * A time zone transition that occurs on a specific date and at a specific
     * time.
     *
     * @since Exchange 2010
     *
     * @var AbsoluteDateTransitionType
     */
    public $AbsoluteDateTransition;

    /**
     * The unique identifier of the transitions group.
     *
     * @since Exchange 2010
     *
     * @var string
     */
    public $Id;

    /**
     * A time zone transition that occurs on a specified day of the year.
     *
     * @since Exchange 2010
     *
     * @var RecurringDateTransitionType
     */
    public $RecurringDateTransition;

    /**
     * A time zone transition that occurs on the same day each year.
     *
     * @since Exchange 2010
     *
     * @var RecurringDayTransitionType
     */
    public $RecurringDayTransition;
}
