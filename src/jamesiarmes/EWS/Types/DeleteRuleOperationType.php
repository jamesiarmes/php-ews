<?php
/**
 * Contains DeleteRuleOperationType.
 */

namespace jamesiarmes\EWS\Types;

use jamesiarmes\EWS\EWSType;

/**
 * Represents an operation to delete an existing Inbox rule.
 *
 * @package jamesiarmes\EWS\Types
 */
class DeleteRuleOperationType extends EWSType
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
