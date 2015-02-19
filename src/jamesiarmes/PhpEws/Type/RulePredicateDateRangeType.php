<?php
/**
 * Contains \jamesiarmes\PhpEws\Type\RulePredicateDateRangeType.
 */

namespace jamesiarmes\PhpEws\Type;

use \jamesiarmes\PhpEws\Type;

/**
 * Specifies the date range within which incoming messages have to have been
 * received in order for the condition or exception to apply.
 *
 * @package php-ews\Type
 */
class RulePredicateDateRangeType extends Type
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
