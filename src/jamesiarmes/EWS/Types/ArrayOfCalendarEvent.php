<?php
/**
 * Contains ArrayOfCalendarEvent.
 */

namespace jamesiarmes\EWS\Types;

use jamesiarmes\EWS\EWSType;

/**
 * Represents a set of unique calendar item occurrences that represent the
 * requested user's availability.
 *
 * @package jamesiarmes\EWS\Types
 */
class ArrayOfCalendarEvent extends EWSType
{
    /**
     * Represents a unique calendar item occurrence.
     *
     * @since Exchange 2007
     *
     * @var CalendarEvent
     */
    public $CalendarEvent;
}
