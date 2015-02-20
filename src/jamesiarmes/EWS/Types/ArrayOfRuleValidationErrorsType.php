<?php
/**
 * Contains ArrayOfRuleValidationErrorsType.
 */

namespace jamesiarmes\EWS\Types;

use jamesiarmes\EWS\EWSType;

/**
 * Represents an array of rule validation errors on each rule field that has an
 * error.
 *
 * @package jamesiarmes\EWS\Types
 */
class ArrayOfRuleValidationErrorsType extends EWSType
{
    /**
     * Represents a single validation error on a particular rule property value,
     * predicate property value, or action property value.
     *
     * @since Exchange 2010
     *
     * @var RuleValidationErrorType
     */
    public $Error;
}
