<?php
/**
 * Contains ArrayOfRuleOperationsType.
 */

namespace jamesiarmes\EWS\Types;

use jamesiarmes\EWS\EWSType;

/**
 * Represents an array of rule operations that can be performed on an Inbox.
 *
 * @package jamesiarmes\EWS\Types
 */
class ArrayOfRuleOperationsType extends EWSType
{
    /**
     * Represents an operation to create a new Inbox rule.
     *
     * @since Exchange 2010
     *
     * @var CreateRuleOperationType
     */
    public $CreateRuleOperation;

    /**
     * Represents an operation to delete an Inbox rule.
     *
     * @since Exchange 2010
     *
     * @var DeleteRuleOperationType
     */
    public $DeleteRuleOperation;

    /**
     * Represents an operation to update an Inbox rule.
     *
     * @since Exchange 2010
     *
     * @var SetRuleOperationType
     */
    public $SetRuleOperation;
}
