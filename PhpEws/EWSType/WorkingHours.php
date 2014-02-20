<?php
/**
 * Definition of the WorkingHours type
 *
 * @package php-ews
 * @subpackage Types
 */

/**
 * Definition of the WorkingHours type
 */
class EWSType_WorkingHours extends EWSType
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
