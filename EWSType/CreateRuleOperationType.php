<?php
/**
 * Contains EWSType_CreateRuleOperationType.
 */

/**
 * Represents an operation to create a new Inbox rule.
 *
 * @package php-ews\Types
 */
class EWSType_CreateRuleOperationType extends EWSType
{
    /**
     * Represents a rule to be created in a user's mailbox.
     *
     * @since Exchange 2010
     *
     * @var EWSType_RuleType
     */
    public $Rule;
}
