<?php
/**
 * Contains EWSType_ArrayOfRuleOperationErrorsType.
 */

/**
 * Represents an array of rule validation errors on each rule field that has an
 * error.
 *
 * @package php-ews\Type
 */
class EWSType_ArrayOfRuleOperationErrorsType extends EWSType
{
    /**
     * Represents a rule operation error.
     *
     * @since Exchange 2010
     *
     * @var \jamesiarmes\PhpEws\Type\RuleOperationErrorType
     */
    public $RuleOperationError;
}
