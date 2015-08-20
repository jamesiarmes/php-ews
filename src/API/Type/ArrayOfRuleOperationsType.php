<?php

namespace jamesiarmes\PEWS\API\Type;

use jamesiarmes\PEWS\API\Type;

/**
 * Class representing ArrayOfRuleOperationsType
 *
 * Represents an array of rule operations to be performed
 * XSD Type: ArrayOfRuleOperationsType
 *
 * @method ArrayOfRuleOperationsType getCreateRuleOperation()
 * @method ArrayOfRuleOperationsType setCreateRuleOperation(array $createRuleOperation)
 * @method ArrayOfRuleOperationsType getSetRuleOperation()
 * @method ArrayOfRuleOperationsType setSetRuleOperation(array $setRuleOperation)
 * @method ArrayOfRuleOperationsType getDeleteRuleOperation()
 * @method ArrayOfRuleOperationsType setDeleteRuleOperation(array $deleteRuleOperation)
 */
class ArrayOfRuleOperationsType extends Type
{

    /**
     * @property \jamesiarmes\PEWS\API\Type\CreateRuleOperationType[]
     * $createRuleOperation
     */
    protected $createRuleOperation = null;

    /**
     * @property \jamesiarmes\PEWS\API\Type\SetRuleOperationType[] $setRuleOperation
     */
    protected $setRuleOperation = null;

    /**
     * @property \jamesiarmes\PEWS\API\Type\DeleteRuleOperationType[]
     * $deleteRuleOperation
     */
    protected $deleteRuleOperation = null;


}

