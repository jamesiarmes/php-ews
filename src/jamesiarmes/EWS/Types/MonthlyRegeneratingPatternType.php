<?php
/**
 * Contains MonthlyRegeneratingPatternType.
 */

namespace jamesiarmes\EWS\Types;

use jamesiarmes\EWS\EWSType;

/**
 * Describes the frequency, in months, of which task is regenerated.
 *
 * @package jamesiarmes\EWS\Types
 *
 * @todo Extend RegeneratingPatternBaseType.
 */
class MonthlyRegeneratingPatternType extends EWSType
{
    /**
     * Defines the interval, in months, between two consecutive recurring items.
     *
     * @since Exchange 2007
     *
     * @var integer
     */
    public $Interval;
}
