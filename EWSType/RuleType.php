<?php
/**
 * Contains EWSType_RuleType.
 */

/**
 * Represents a single rule in a user's mailbox.
 *
 * @package php-ews\Types
 */
class EWSType_RuleType extends EWSType
{
    /**
     * Represents the actions to be taken on a message when the conditions are
     * fulfilled.
     *
     * @since Exchange 2010
     *
     * @var EWSType_RuleActionsType
     */
    public $Actions;

    /**
     * Identifies the conditions that, when fulfilled, will trigger the rule
     * actions for a rule.
     *
     * @since Exchange 2010
     *
     * @var EWSType_RulePredicatesType
     */
    public $Conditions;

    /**
     * Contains the display name of a rule.
     *
     * @since Exchange 2010
     *
     * @var string
     */
    public $DisplayName;

    /**
     * Identifies the exceptions that represent all the available rule exception
     * conditions for the inbox rule.
     *
     * @since Exchange 2010
     *
     * @var EWSType_RulePredicatesType
     */
    public $Exceptions;

    /**
     * Indicates whether the rule is enabled.
     *
     * @since Exchange 2010
     *
     * @var boolean
     */
    public $IsEnabled;

    /**
     * Indicates whether the rule is in an error condition.
     *
     * @since Exchange 2010
     *
     * @var boolean
     */
    public $IsInError;

    /**
     * Indicates whether the rule cannot be modified with the managed code APIs.
     *
     * @since Exchange 2010
     *
     * @var boolean
     */
    public $IsNotSupported;

    /**
     * Indicates the order in which a rule is to be run.
     *
     * @since Exchange 2010
     *
     * @var integer
     */
    public $Priority;

    /**
     * Specifies the rule identifier.
     *
     * @since Exchange 2010
     *
     * @var string
     */
    public $RuleId;
}
