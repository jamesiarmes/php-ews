<?php
/**
 * Contains \jamesiarmes\PhpEws\Type\RecurringDateTransitionType.
 */

namespace jamesiarmes\PhpEws\Type;

/**
 * Represents a time zone transition that occurs on a specific date each year.
 *
 * @package php-ews\Type
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
