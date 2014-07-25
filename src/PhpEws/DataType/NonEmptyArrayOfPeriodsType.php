<?php

namespace PhpEws\DataType;

use PhpEws\DataType;
/**
 * The Period element defines the name, time offset, and unique identifier for a
 * specific stage of the time zone.
 *
 * @package php-ews
 * @subpackage Types
 */

/**
 * Definition of the NonEmptyArrayOfPeriodsType type.
 */
class NonEmptyArrayOfPeriodsType extends DataType
{
    /**
     * The name, time offset, and unique identifier for a specific stage of the
     * time zone.
     *
     * @var EWSType_PeriodType
     */
    public $Period;
}
