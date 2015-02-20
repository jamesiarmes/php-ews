<?php
/**
 * Contains ExceptionPropertyFieldURIType.
 */

namespace jamesiarmes\EWS\Types;

use jamesiarmes\EWS\EWSType;

/**
 * Defines a property of an occurrence of a recurring item.
 *
 * @package jamesiarmes\EWS\Enumerations
 */
class ExceptionPropertyFieldURIType extends EWSType
{
    /**
     * Identifies the content as containing an error.
     *
     * @since Exchange 2007
     *
     * @var string
     */
    const ATTACHMENT_CONTENT = 'attachment:Content';

    /**
     * Identifies the content type as containing an error.
     *
     * @since Exchange 2007
     *
     * @var string
     */
    const ATTACHMENT_CONTENT_TYPE = 'attachment:ContentType';

    /**
     * Identifies the attachment name as containing an error.
     *
     * @since Exchange 2007
     *
     * @var string
     */
    const ATTACHMENT_NAME = 'attachment:Name';

    /**
     * Identifies the DayOfMonth as containing an error.
     *
     * @since Exchange 2007
     *
     * @var string
     */
    const RECURRENCE_DAY_OF_MONTH = 'recurrence:DayOfMonth';

    /**
     * Identifies the day of week index as containing an error.
     *
     * @since Exchange 2007
     *
     * @var string
     */
    const RECURRENCE_DAY_OF_WEEK_INDEX = 'recurrence:DayOfWeekIndex';

    /**
     * Identifies the DaysOfWeek property as containing an error.
     *
     * @since Exchange 2007
     *
     * @var string
     */
    const RECURRENCE_DAYS_OF_WEEK = 'recurrence:DaysOfWeek';

    /**
     * Identifies the interval as containing an error.
     *
     * @since Exchange 2007
     *
     * @var string
     */
    const RECURRENCE_INTERVAL = 'recurrence:Interval';

    /**
     * Identifies the month field as containing an error.
     *
     * @since Exchange 2007
     *
     * @var string
     */
    const RECURRENCE_MONTH = 'recurrence:Month';

    /**
     * Identifies the number of occurrences as containing an error.
     *
     * @since Exchange 2007
     *
     * @var string
     */
    const RECURRENCE_NUMBER_OF_OCCURRENCES = 'recurrence:NumberOfOccurrences';

    /**
     * Element value.
     *
     * @var string
     */
    public $_;

    /**
     * Returns the value of this object as a string.
     *
     * @return string
     */
    public function __toString()
    {
        return $this->_;
    }
}
