<?php

namespace jamesiarmes\PEWS\API\Type;

use jamesiarmes\PEWS\API\Type;

/**
 * Class representing ProtectionRuleType
 *
 *
 * XSD Type: ProtectionRuleType
 *
 * @method string getName()
 * @method ProtectionRuleType setName(string $name)
 * @method boolean getUserOverridable()
 * @method ProtectionRuleType setUserOverridable(boolean $userOverridable)
 * @method integer getPriority()
 * @method ProtectionRuleType setPriority(integer $priority)
 * @method ProtectionRuleConditionType getCondition()
 * @method ProtectionRuleType setCondition(ProtectionRuleConditionType $condition)
 * @method ProtectionRuleActionType getAction()
 * @method ProtectionRuleType setAction(ProtectionRuleActionType $action)
 */
class ProtectionRuleType extends Type
{

    /**
     * @var string
     */
    protected $name = null;

    /**
     * @var boolean
     */
    protected $userOverridable = null;

    /**
     * @var integer
     */
    protected $priority = null;

    /**
     * @var \jamesiarmes\PEWS\API\Type\ProtectionRuleConditionType
     */
    protected $condition = null;

    /**
     * @var \jamesiarmes\PEWS\API\Type\ProtectionRuleActionType
     */
    protected $action = null;
}
