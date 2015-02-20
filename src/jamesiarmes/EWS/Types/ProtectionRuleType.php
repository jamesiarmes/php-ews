<?php
/**
 * Contains ProtectionRuleType.
 */

namespace jamesiarmes\EWS\Types;

use jamesiarmes\EWS\EWSType;

/**
 * Represents a single protection rule.
 *
 * @package jamesiarmes\EWS\Types
 */
class ProtectionRuleType extends EWSType
{
    /**
     * Identifies what action must be executed if the condition part of the rule
     * matches.
     *
     * @since Exchange 2010
     *
     * @var ProtectionRuleActionType
     */
    public $Action;

    /**
     * Identifies the condition that must be satisfied for the action part of
     * the rule to be executed.
     *
     * @since Exchange 2010
     *
     * @var ProtectionRuleConditionType
     */
    public $Condition;

    /**
     * Identifies the name of the rule.
     *
     * This property is required.
     *
     * @since Exchange 2010
     *
     * @var string
     */
    public $Name;

    /**
     * Specifies the rule priority.
     *
     * This property is required with a minimum value of 1.
     *
     * @since Exchange 2010
     *
     * @var integer
     */
    public $Priority;

    /**
     * Specifies whether the rule is mandatory.
     *
     * If the rule is mandatory, this attribute value must be false
     *
     * @since Exchange 2010
     *
     * @var boolean
     */
    public $UserOverridable;
}
