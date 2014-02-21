<?php
/**
 * Definition of the TimeChangeType type
 *
 * @package php-ews
* @subpackage Types
 */

namespace EWSType;

use PhpEws;
/**
 * Definition of the TimeChangeType type
 */
class TimeChangeType extends PhpEws\EWSType
{
    /**
     * Offset property
     *
     * @var duration
     */
    public $Offset;

    /**
     * RelativeYearlyRecurrence property
     *
     * @var RelativeYearlyRecurrencePatternType
     */
    public $RelativeYearlyRecurrence;

    /**
     * AbsoluteDate property
     *
     * @var date
     */
    public $AbsoluteDate;

    /**
     * Time property
     *
     * @var time
     */
    public $Time;

    /**
     * TimeZoneName property
     *
     * @var string
     */
    public $TimeZoneName;
}
