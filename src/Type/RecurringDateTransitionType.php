<?php
/**
 * Contains \jamesiarmes\PEWS\Type\RecurringDateTransitionType.
 */

namespace jamesiarmes\PEWS\Type;

/**
 * Represents a time zone transition that occurs on a specific date each year.
 *
 * @package php-ews\Types
 */
class RecurringDateTransitionType extends RecurringTimeTransitionType
{
    /**
     * The day of the month on which the time zone transition occurs.
     *
     * @since Exchange 2010
     *
     * @var integer
     */
    public $Day;
}
