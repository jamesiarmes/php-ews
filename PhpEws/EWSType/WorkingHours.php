<?php
/**
 * Definition of the WorkingHours type
 *
 * @package php-ews
* @subpackage Types
 */

namespace EWSType;

use PhpEws;
/**
 * Definition of the WorkingHours type
 */
class WorkingHours extends PhpEws\EWSType
{
    /**
     * TimeZone property
     *
     * @var SerializableTimeZone
     */
    public $TimeZone;

    /**
     * WorkingPeriodArray property
     *
     * @var ArrayOfWorkingPeriod
     */
    public $WorkingPeriodArray;
}
