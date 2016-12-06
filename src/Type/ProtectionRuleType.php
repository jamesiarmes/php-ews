<?php
/**
 * Contains \jamesiarmes\PhpEws\Type\ProtectionRuleType.
 */

namespace jamesiarmes\PhpEws\Type;

use \jamesiarmes\PhpEws\Type;

/**
 * Represents a single protection rule.
 *
 * @package php-ews\Type
 */
class ProtectionRuleType extends Type
{
    /**
     * Identifies what action must be executed if the condition part of the rule
     * matches.
     *
     * @since Exchange 2010
     *
     * @var \jamesiarmes\PhpEws\Type\ProtectionRuleActionType
     */
    public $Action;

    /**
     * Identifies the condition that must be satisfied for the action part of
     * the rule to be executed.
     *
     * @since Exchange 2010
     *
     * @var \jamesiarmes\PhpEws\Type\ProtectionRuleConditionType
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
