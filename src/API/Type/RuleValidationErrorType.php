<?php

namespace jamesiarmes\PEWS\API\Type;

use jamesiarmes\PEWS\API\Type;

/**
 * Class representing RuleValidationErrorType
 *
 * Represents a single validation error on a particular rule property value, predicate property value or action property value
 * XSD Type: RuleValidationErrorType
 *
 * @method string getFieldURI()
 * @method RuleValidationErrorType setFieldURI(string $fieldURI)
 * @method string getErrorCode()
 * @method RuleValidationErrorType setErrorCode(string $errorCode)
 * @method string getErrorMessage()
 * @method RuleValidationErrorType setErrorMessage(string $errorMessage)
 * @method string getFieldValue()
 * @method RuleValidationErrorType setFieldValue(string $fieldValue)
 */
class RuleValidationErrorType extends Type
{

    /**
     * @var string
     */
    protected $fieldURI = null;

    /**
     * @var string
     */
    protected $errorCode = null;

    /**
     * @var string
     */
    protected $errorMessage = null;

    /**
     * @var string
     */
    protected $fieldValue = null;
}
