<?php

namespace jamesiarmes\PEWS\API\TypeTest;

use jamesiarmes\PEWS\API\Type;

/**
 * Class representing ArrayOfRuleOperationsType
 *
 * Represents an array of rule operations to be performed
 * XSD Type: ArrayOfRuleOperationsType
 *
 * @method ArrayOfRuleOperationsType getCreateRuleOperation()
 * @method ArrayOfRuleOperationsType setCreateRuleOperation($createRuleOperation)
 * @method ArrayOfRuleOperationsType getSetRuleOperation()
 * @method ArrayOfRuleOperationsType setSetRuleOperation($setRuleOperation)
 * @method ArrayOfRuleOperationsType getDeleteRuleOperation()
 * @method ArrayOfRuleOperationsType setDeleteRuleOperation($deleteRuleOperation)
 */
class ArrayOfRuleOperationsType extends Type
{

    /**
     * @property array $createRuleOperation
     */
    protected $createRuleOperation = null;

    /**
     * @property array $setRuleOperation
     */
    protected $setRuleOperation = null;

    /**
     * @property array $deleteRuleOperation
     */
    protected $deleteRuleOperation = null;


}

