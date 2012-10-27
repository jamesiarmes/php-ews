<?php
/**
 * Contains EWSType_RuleValidationErrorType.
 */

/**
 * Represents a single validation error on a particular rule property value,
 * predicate property value, or action property value.
 *
 * @package php-ews\Types
 */
class EWSType_RuleValidationErrorType extends EWSType
{
    /**
     * Represents a rule validation error code that describes what failed
     * validation for each rule predicate or action.
     *
     * @since Exchange 2010
     *
     * @var EWSType_RuleValidationErrorCodeType
     */
    public $ErrorCode;

    /**
     * Represents the reason for the validation error.
     *
     * @since Exchange 2010
     *
     * @var string
     */
    public $ErrorMessage;

    /**
     * Specifies the URI to the rule field that caused the validation error.
     *
     * @since Exchange 2010
     *
     * @var EWSType_RuleFieldURIType
     */
    public $FieldUri;

    /**
     * Represents the value of the field that caused the validation error.
     *
     * @since Exchange 2010
     *
     * @var string
     */
    public $FieldValue;
}
