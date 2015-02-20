<?php
/**
 * Contains RecurrenceRangeBaseType.
 */

namespace jamesiarmes\EWS\Types;

use jamesiarmes\EWS\EWSType;

/**
 * Base class for recurrence ranges,
 *
 * @package jamesiarmes\EWS\Types
 */
abstract class RecurrenceRangeBaseType extends EWSType
{
    /**
     * Represents the start date of a recurring task or calendar item.
     *
     * @since Exchange 2007
     *
     * @var string
     *
     * @todo Make a date object that extends DateTime.
     */
    public $StartDate;
}
