<?php
/**
 * Contains \jamesiarmes\PhpEws\ArrayType\ArrayOfTransitionsType.
 */

namespace jamesiarmes\PhpEws\ArrayType;

use \jamesiarmes\PhpEws\ArrayType;

/**
 * Represents an array of time zone transitions.
 *
 * @package php-ews\Array
 */
class ArrayOfTransitionsType extends ArrayType
{
    /**
     * A time zone transition that occurs on a specific date and at a specific
     * time.
     *
     * @since Exchange 2010
     *
     * @var \jamesiarmes\PhpEws\Type\AbsoluteDateTransitionType[]
     */
    public $AbsoluteDateTransition = array();

    /**
     * The unique identifier of the transitions group.
     *
     * @since Exchange 2010
     *
     * @var string
     */
    public $Id = array();

    /**
     * A time zone transition that occurs on a specified day of the year.
     *
     * @since Exchange 2010
     *
     * @var \jamesiarmes\PhpEws\Type\RecurringDateTransitionType[]
     */
    public $RecurringDateTransition = array();

    /**
     * A time zone transition that occurs on the same day each year.
     *
     * @since Exchange 2010
     *
     * @var \jamesiarmes\PhpEws\Type\RecurringDayTransitionType[]
     */
    public $RecurringDayTransition = array();
}
