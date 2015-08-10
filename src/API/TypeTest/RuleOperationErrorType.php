<?php

namespace jamesiarmes\PEWS\API\TypeTest;

use jamesiarmes\PEWS\API\Type;

/**
 * Class representing RuleOperationErrorType
 *
 *
 * XSD Type: RuleOperationErrorType
 *
 * @method RuleOperationErrorType getOperationIndex()
 * @method RuleOperationErrorType setOperationIndex($operationIndex)
 * @method RuleOperationErrorType getValidationErrors()
 * @method RuleOperationErrorType setValidationErrors($validationErrors)
 */
class RuleOperationErrorType extends Type
{

    /**
     * @property integer $operationIndex
     */
    protected $operationIndex = null;

    /**
     * @property array $validationErrors
     */
    protected $validationErrors = null;


}

