<?php

namespace jamesiarmes\PEWS\API\TypeTest;

use jamesiarmes\PEWS\API\TypeTest;

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
class ArrayOfRuleOperationsType extends TypeTest
{

    /**
     * @property \jamesiarmes\PEWS\API\TypeTest\CreateRuleOperationType[]
     * $createRuleOperation
     */
    protected $createRuleOperation = null;

    /**
     * @property \jamesiarmes\PEWS\API\TypeTest\SetRuleOperationType[]
     * $setRuleOperation
     */
    protected $setRuleOperation = null;

    /**
     * @property \jamesiarmes\PEWS\API\TypeTest\DeleteRuleOperationType[]
     * $deleteRuleOperation
     */
    protected $deleteRuleOperation = null;


}

