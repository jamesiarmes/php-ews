<?php

namespace jamesiarmes\PEWS\API\Type;

use jamesiarmes\PEWS\API\Type;

/**
 * Class representing RuleOperationErrorType
 *
 *
 * XSD Type: RuleOperationErrorType
 *
 * @method integer getOperationIndex()
 * @method RuleOperationErrorType setOperationIndex(integer $operationIndex)
 * @method array getValidationErrors()
 * @method RuleOperationErrorType setValidationErrors(array $validationErrors)
 */
class RuleOperationErrorType extends Type
{

    /**
     * @var integer
     */
    protected $operationIndex = null;

    /**
     * @var \jamesiarmes\PEWS\API\Type\RuleValidationErrorType[]
     */
    protected $validationErrors = null;
}
