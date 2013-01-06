<?php
/**
 * Definition of the TimeChangeType type
 *
 * @package php-ews
 * @subpackage Types
 */

namespace PhpEws\EWSType;

/**
 * Definition of the TimeChangeType type
 */
class TimeChangeType extends EWSType
{
    /**
     * Offset property
     *
     * @var EWSType_duration
     */
    public $Offset;

    /**
     * RelativeYearlyRecurrence property
     *
     * @var EWSType_RelativeYearlyRecurrencePatternType
     */
    public $RelativeYearlyRecurrence;

    /**
     * AbsoluteDate property
     *
     * @var EWSType_date
     */
    public $AbsoluteDate;

    /**
     * Time property
     *
     * @var EWSType_time
     */
    public $Time;

    /**
     * TimeZoneName property
     *
     * @var string
     */
    public $TimeZoneName;
}
