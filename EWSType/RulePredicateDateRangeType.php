<?php
/**
 * Contains EWSType_RulePredicateDateRangeType.
 */

/**
 * Specifies the date range within which incoming messages have to have been
 * received in order for the condition or exception to apply.
 *
 * @package php-ews\Types
 */
class EWSType_RulePredicateDateRangeType extends EWSType
{
    /**
     * Specifies the rule time period and indicates that the rule condition is
     * met before this value.
     *
     * @since Exchange 2010
     *
     * @var string
     *
     * @todo Make a DateTime object.
     */
    public $EndDateTime;

    /**
     * Specifies the rule time period and indicates that the rule condition is
     * met after this value.
     *
     * @since Exchange 2010
     *
     * @var string
     *
     * @todo Make a DateTime object.
     */
    public $StartDateTime;
}
