<?php
/**
 * Contains RuleOperationErrorType.
 */

namespace jamesiarmes\EWS\Types;

use jamesiarmes\EWS\EWSType;

/**
 * Represents a rule operation error.
 *
 * @package jamesiarmes\EWS\Types
 */
class RuleOperationErrorType extends EWSType
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
     * @var ArrayOfRuleValidationErrorsType
     */
    public $ValidationErrors;
}
