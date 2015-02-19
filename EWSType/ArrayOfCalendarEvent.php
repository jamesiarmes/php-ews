<?php
/**
 * Contains EWSType_ArrayOfCalendarEvent.
 */

/**
 * Represents a set of unique calendar item occurrences that represent the
 * requested user's availability.
 *
 * @package php-ews\Type
 */
class EWSType_ArrayOfCalendarEvent extends EWSType
{
    /**
     * Represents a unique calendar item occurrence.
     *
     * @since Exchange 2007
     *
     * @var \jamesiarmes\PhpEws\Type\CalendarEvent
     */
    public $CalendarEvent;
}
