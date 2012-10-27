<?php
/**
 * Contains EWSType_RuleOperationErrorType.
 */

/**
 * Represents a rule operation error.
 *
 * @package php-ews\Types
 */
class EWSType_RuleOperationErrorType extends EWSType
{
    /**
     * Indicates the index of the operation in the request that caused the rule
     * operation error.
     *
     * @since Exchange 2010
     *
     * @var integer
     */
    public $OperationIndex;

    /**
     * Represents an array of rule validation errors on each rule field that has
     * an error.
     *
     * @since Exchange 2010
     *
     * @var EWSType_ArrayOfRuleValidationErrorsType
     */
    public $ValidationErrors;
}
