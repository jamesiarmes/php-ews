<?php
/**
 * Contains \jamesiarmes\PhpEws\ArrayType\ArrayOfCalendarEvent.
 */

namespace jamesiarmes\PhpEws\ArrayType;

use \jamesiarmes\PhpEws\ArrayType;

/**
 * Represents a set of unique calendar item occurrences that represent the
 * requested user's availability.
 *
 * @package php-ews\Array
 */
class ArrayOfCalendarEvent extends ArrayType
{
    /**
     * Represents a unique calendar item occurrence.
     *
     * @since Exchange 2007
     *
     * @var \jamesiarmes\PhpEws\Type\CalendarEvent[]
     */
    public $CalendarEvent = array();
}
