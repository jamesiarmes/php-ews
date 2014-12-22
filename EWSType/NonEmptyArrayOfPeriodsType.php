<?php
/**
 * Contains EWSType_NonEmptyArrayOfPeriodsType.
 */

/**
 * Represents an array of periods that define the time offset at different
 * stages of a time zone.
 *
 * @package php-ews\Types
 */
class EWSType_NonEmptyArrayOfPeriodsType extends EWSType
{
    /**
     * The name, time offset, and unique identifier for a specific stage of a
     * time zone.
     *
     * @since Exchange 2010
     *
     * @var EWSType_PeriodType
     */
    public $Period;
}
