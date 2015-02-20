<?php
/**
 * Contains ArrayOfRuleOperationErrorsType.
 */

namespace jamesiarmes\EWS\Types;

use jamesiarmes\EWS\EWSType;

/**
 * Represents an array of rule validation errors on each rule field that has an
 * error.
 *
 * @package jamesiarmes\EWS\Types
 */
class ArrayOfRuleOperationErrorsType extends EWSType
{
    /**
     * Represents a rule operation error.
     *
     * @since Exchange 2010
     *
     * @var RuleOperationErrorType
     */
    public $RuleOperationError;
}
