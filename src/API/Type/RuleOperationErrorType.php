<?php

namespace jamesiarmes\PEWS\API\Type;

use jamesiarmes\PEWS\API\Type;

/**
 * Class representing RuleOperationErrorType
 *
 *
 * XSD Type: RuleOperationErrorType
 *
 * @method RuleOperationErrorType getOperationIndex()
 * @method RuleOperationErrorType setOperationIndex(integer $operationIndex)
 * @method RuleOperationErrorType getValidationErrors()
 * @method RuleOperationErrorType setValidationErrors(array $validationErrors)
 */
class RuleOperationErrorType extends Type
{

    /**
     * @property integer $operationIndex
     */
    protected $operationIndex = null;

    /**
     * @property \jamesiarmes\PEWS\API\Type\RuleValidationErrorType[] $validationErrors
     */
    protected $validationErrors = null;


}

