<?php
/**
 * The Period element defines the name, time offset, and unique identifier for a
 * specific stage of the time zone.
 *
 * @package php-ews
* @subpackage Types
 */

namespace EWSType;

use PhpEws;
/**
 * Definition of the NonEmptyArrayOfPeriodsType type.
 */
class NonEmptyArrayOfPeriodsType extends PhpEws\EWSType
{
    /**
     * The name, time offset, and unique identifier for a specific stage of the
     * time zone.
     *
     * @var PeriodType
     */
    public $Period;
}
