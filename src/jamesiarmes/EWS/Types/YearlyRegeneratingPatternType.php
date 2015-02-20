<?php
/**
 * Contains YearlyRegeneratingPatternType.
 */

namespace jamesiarmes\EWS\Types;

use jamesiarmes\EWS\EWSType;

/**
 * Describes the frequency, in years, in which a task is regenerated.
 *
 * @package jamesiarmes\EWS\Types
 *
 * @todo Extend RegeneratingPatternBaseType.
 */
class YearlyRegeneratingPatternType extends EWSType
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
