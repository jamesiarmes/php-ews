<?php
/**
 * Contains ProtectionRuleArgumentType.
 */

namespace jamesiarmes\EWS\Types;

use jamesiarmes\EWS\EWSType;

/**
 * Specifies an argument to be passed to an action.
 *
 * @package jamesiarmes\EWS\Types
 */
class ProtectionRuleArgumentType extends EWSType
{
    /**
     * A non-empty string value that represents the value of an argument to the
     * action part of a protection rule.
     *
     * @since Exchange 2010
     *
     * @var string
     */
    public $Value;
}
