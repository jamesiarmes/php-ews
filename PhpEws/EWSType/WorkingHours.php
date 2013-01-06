<?php
/**
 * Definition of the WorkingHours type
 *
 * @package php-ews
 * @subpackage Types
 */

namespace PhpEws\EWSType;

/**
 * Definition of the WorkingHours type
 */
class WorkingHours extends EWSType
{
    /**
     * TimeZone property
     *
     * @var EWSType_SerializableTimeZone
     */
    public $TimeZone;

    /**
     * WorkingPeriodArray property
     *
     * @var EWSType_ArrayOfWorkingPeriod
     */
    public $WorkingPeriodArray;
}
