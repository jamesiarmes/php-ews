<?php
/**
 * Contains RulePredicateSizeRangeType.
 */

namespace jamesiarmes\EWS\Types;

use jamesiarmes\EWS\EWSType;

/**
 * Specifies the minimum and maximum sizes that incoming messages must be in
 * order for the condition or exception to apply.
 *
 * @package jamesiarmes\EWS\Types
 */
class RulePredicateSizeRangeType extends EWSType
{
    /**
     * Specifies the maximum size that a message must be in order for the
     * condition or exception to apply.
     *
     * @since Exchange 2010
     *
     * @var integer
     */
    public $MaximumSize;

    /**
     * Specifies the minimum size that a message must be in order for the
     * condition or exception to apply.
     *
     * @since Exchange 2010
     *
     * @var integer
     */
    public $MinimumSize;
}
