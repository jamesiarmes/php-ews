<?php

namespace jamesiarmes\PEWS\API\TypeTest;

use jamesiarmes\PEWS\API\Type;

/**
 * Class representing RuleValidationErrorType
 *
 * Represents a single validation error on a particular rule property value,
 * predicate property value or action property value
 * XSD Type: RuleValidationErrorType
 *
 * @method RuleValidationErrorType getFieldURI()
 * @method RuleValidationErrorType setFieldURI($fieldURI)
 * @method RuleValidationErrorType getErrorCode()
 * @method RuleValidationErrorType setErrorCode($errorCode)
 * @method RuleValidationErrorType getErrorMessage()
 * @method RuleValidationErrorType setErrorMessage($errorMessage)
 * @method RuleValidationErrorType getFieldValue()
 * @method RuleValidationErrorType setFieldValue($fieldValue)
 */
class RuleValidationErrorType extends Type
{

    /**
     * @property string $fieldURI
     */
    protected $fieldURI = null;

    /**
     * @property string $errorCode
     */
    protected $errorCode = null;

    /**
     * @property string $errorMessage
     */
    protected $errorMessage = null;

    /**
     * @property string $fieldValue
     */
    protected $fieldValue = null;


}

