<?php
/**
 * Contains EWSType_ArrayOfRuleValidationErrorsType.
 */

/**
 * Represents an array of rule validation errors on each rule field that has an
 * error.
 *
 * @package php-ews\Types
 */
class EWSType_ArrayOfRuleValidationErrorsType extends EWSType
{
    /**
     * Represents a single validation error on a particular rule property value,
     * predicate property value, or action property value.
     *
     * @since Exchange 2010
     *
     * @var EWSType_RuleValidationErrorType
     */
    public $Error;
}
