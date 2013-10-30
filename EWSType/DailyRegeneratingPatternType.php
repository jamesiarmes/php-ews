<?php
/**
 * Contains EWSType_DailyRegeneratingPatternType.
 */

/**
 * Describes the frequency, in days, in which a task is regenerated.
 *
 * @package php-ews\Types
 */
class EWSType_DailyRegeneratingPatternType extends EWSType
{
    /**
     * Defines the interval, in days, between two consecutive recurring items.
     *
     * The value must be in the range from 1 to 999.
     *
     * @since Exchange 2007
     *
     * @var integer
     */
    public $Interval;
}
