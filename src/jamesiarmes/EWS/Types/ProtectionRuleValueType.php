<?php
/**
 * Contains ProtectionRuleValueType.
 */

namespace jamesiarmes\EWS\Types;

use jamesiarmes\EWS\EWSType;

/**
 * Identifies a single recipient or sender department.
 *
 * @package jamesiarmes\EWS\Types
 *
 * @todo Determine if we need this.
 */
class ProtectionRuleValueType extends EWSType
{
    /**
     * A single recipient or sender department.
     *
     * @since Exchange 2010
     *
     * @var string
     */
    public $_;
}
