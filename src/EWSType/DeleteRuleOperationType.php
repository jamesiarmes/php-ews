<?php
/**
 * Contains EWSType_DeleteRuleOperationType.
 */

/**
 * Represents an operation to delete an existing Inbox rule.
 *
 * @package php-ews\Types
 */
class EWSType_DeleteRuleOperationType extends EWSType
{
    /**
     * Specifies the identifier of the rule to delete.
     *
     * @since Exchange 2010
     *
     * @var string
     */
    public $RuleId;
}
