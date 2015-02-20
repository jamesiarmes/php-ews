<?php
/**
 * Contains CreateRuleOperationType.
 */

namespace jamesiarmes\EWS\Types;

use jamesiarmes\EWS\EWSType;

/**
 * Represents an operation to create a new Inbox rule.
 *
 * @package jamesiarmes\EWS\Types
 */
class CreateRuleOperationType extends EWSType
{
    /**
     * Represents a rule to be created in a user's mailbox.
     *
     * @since Exchange 2010
     *
     * @var RuleType
     */
    public $Rule;
}
