<?php
/**
 * Contains SetRuleOperationType.
 */

namespace jamesiarmes\EWS\Types;

use jamesiarmes\EWS\EWSType;

/**
 * Represents an operation to update an existing rule.
 *
 * @package jamesiarmes\EWS\Types
 */
class SetRuleOperationType extends EWSType
{
    /**
     * Represents a rule in a user's mailbox.
     *
     * @since Exchange 2010
     *
     * @var RuleType
     */
    public $Rule;
}
