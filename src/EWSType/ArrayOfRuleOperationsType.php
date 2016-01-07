<?php
/**
 * Contains EWSType_ArrayOfRuleOperationsType.
 */

/**
 * Represents an array of rule operations that can be performed on an Inbox.
 *
 * @package php-ews\Types
 */
class EWSType_ArrayOfRuleOperationsType extends EWSType
{
    /**
     * Represents an operation to create a new Inbox rule.
     *
     * @since Exchange 2010
     *
     * @var EWSType_CreateRuleOperationType
     */
    public $CreateRuleOperation;

    /**
     * Represents an operation to delete an Inbox rule.
     *
     * @since Exchange 2010
     *
     * @var EWSType_DeleteRuleOperationType
     */
    public $DeleteRuleOperation;

    /**
     * Represents an operation to update an Inbox rule.
     *
     * @since Exchange 2010
     *
     * @var EWSType_SetRuleOperationType
     */
    public $SetRuleOperation;
}
