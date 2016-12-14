<?php
/**
 * Contains \jamesiarmes\PhpEws\Type\RuleValidationErrorType.
 */

namespace jamesiarmes\PhpEws\Type;

use \jamesiarmes\PhpEws\Type;

/**
 * Represents a single validation error on a particular rule property value,
 * predicate property value, or action property value.
 *
 * @package php-ews\Type
 */
class RuleValidationErrorType extends Type
{
    /**
     * Represents a rule validation error code that describes what failed
     * validation for each rule predicate or action.
     *
     * @since Exchange 2010
     *
     * @var string
     *
     * @see \jamesiarmes\PhpEws\Enumeration\RuleValidationErrorCodeType
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
     * @var string
     *
     * @see \jamesiarmes\PhpEws\Enumeration\RuleFieldURIType
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
