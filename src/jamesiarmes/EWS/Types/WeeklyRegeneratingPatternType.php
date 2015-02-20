<?php
/**
 * Contains WeeklyRegeneratingPatternType.
 */

namespace jamesiarmes\EWS\Types;

use jamesiarmes\EWS\EWSType;

/**
 * Describes the frequency, in weeks, in which a task is regenerated.
 *
 * @package jamesiarmes\EWS\Types
 *
 * @todo Extend RegeneratingPatternBaseType.
 */
class WeeklyRegeneratingPatternType extends EWSType
{
    /**
     * Defines the interval, in weeks, since the task was completed, after which
     * a new task is regenerated.
     *
     * @since Exchange 2007
     *
     * @var integer
     */
    public $Interval;
}
