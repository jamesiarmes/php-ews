<?php

namespace jamesiarmes\PEWS\API\Type;

use jamesiarmes\PEWS\API\Type;

/**
 * Class representing ArrayOfRuleOperationsType
 *
 * Represents an array of rule operations to be performed
 * XSD Type: ArrayOfRuleOperationsType
 *
 * @method array getCreateRuleOperation()
 * @method ArrayOfRuleOperationsType setCreateRuleOperation(array $createRuleOperation)
 * @method array getSetRuleOperation()
 * @method ArrayOfRuleOperationsType setSetRuleOperation(array $setRuleOperation)
 * @method array getDeleteRuleOperation()
 * @method ArrayOfRuleOperationsType setDeleteRuleOperation(array $deleteRuleOperation)
 */
class ArrayOfRuleOperationsType extends Type
{

    /**
     * @var \jamesiarmes\PEWS\API\Type\CreateRuleOperationType[]
     */
    protected $createRuleOperation = null;

    /**
     * @var \jamesiarmes\PEWS\API\Type\SetRuleOperationType[]
     */
    protected $setRuleOperation = null;

    /**
     * @var \jamesiarmes\PEWS\API\Type\DeleteRuleOperationType[]
     */
    protected $deleteRuleOperation = null;
}
