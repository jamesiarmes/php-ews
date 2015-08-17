<?php

namespace jamesiarmes\PEWS\API\TypeTest;

use jamesiarmes\PEWS\API\TypeTest;

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
class RuleOperationErrorType extends TypeTest
{

    /**
     * @property integer $operationIndex
     */
    protected $operationIndex = null;

    /**
     * @property \jamesiarmes\PEWS\API\TypeTest\RuleValidationErrorType[]
     * $validationErrors
     */
    protected $validationErrors = null;


}

