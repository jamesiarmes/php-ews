<?php
/**
 * Contains EWSType_YearlyRegeneratingPatternType.
 */

/**
 * Describes the frequency, in years, in which a task is regenerated.
 *
 * @package php-ews\Types
 */
class EWSType_YearlyRegeneratingPatternType extends EWSType
{
    /**
     * Defines the interval, in years, during which a new task is regenerated
     * after the completion of the task.
     *
     * @since Exchange 2007
     *
     * @var integer
     */
    public $Interval;
}
