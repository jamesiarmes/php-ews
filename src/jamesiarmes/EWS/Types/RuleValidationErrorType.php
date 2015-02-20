<?php
/**
 * Contains RuleValidationErrorType.
 */

namespace jamesiarmes\EWS\Types;

use jamesiarmes\EWS\EWSType;

/**
 * Represents a single validation error on a particular rule property value,
 * predicate property value, or action property value.
 *
 * @package jamesiarmes\EWS\Types
 */
class RuleValidationErrorType extends EWSType
{
    /**
     * Represents a rule validation error code that describes what failed
     * validation for each rule predicate or action.
     *
     * @since Exchange 2010
     *
     * @var RuleValidationErrorCodeType
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
     * @var RuleFieldURIType
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
