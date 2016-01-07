<?php
/**
 * Contains EWSType_MonthlyRegeneratingPatternType.
 */

/**
 * Describes the frequency, in months, of which task is regenerated.
 *
 * @package php-ews\Types
 *
 * @todo Extend EWSType_RegeneratingPatternBaseType.
 */
class EWSType_MonthlyRegeneratingPatternType extends EWSType
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
