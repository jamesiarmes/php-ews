<?php

namespace jamesiarmes\PEWS\API\TypeTest;

use jamesiarmes\PEWS\API\Type;

/**
 * Class representing RuleType
 *
 * Rule type
 * XSD Type: RuleType
 *
 * @method RuleType getRuleId()
 * @method RuleType setRuleId($ruleId)
 * @method RuleType getDisplayName()
 * @method RuleType setDisplayName($displayName)
 * @method RuleType getPriority()
 * @method RuleType setPriority($priority)
 * @method RuleType getIsEnabled()
 * @method RuleType setIsEnabled($isEnabled)
 * @method RuleType getIsNotSupported()
 * @method RuleType setIsNotSupported($isNotSupported)
 * @method RuleType getIsInError()
 * @method RuleType setIsInError($isInError)
 * @method RuleType getConditions()
 * @method RuleType setConditions($conditions)
 * @method RuleType getExceptions()
 * @method RuleType setExceptions($exceptions)
 * @method RuleType getActions()
 * @method RuleType setActions($actions)
 */
class RuleType extends Type
{

    /**
     * @property string $ruleId
     */
    protected $ruleId = null;

    /**
     * @property string $displayName
     */
    protected $displayName = null;

    /**
     * @property integer $priority
     */
    protected $priority = null;

    /**
     * @property boolean $isEnabled
     */
    protected $isEnabled = null;

    /**
     * @property boolean $isNotSupported
     */
    protected $isNotSupported = null;

    /**
     * @property boolean $isInError
     */
    protected $isInError = null;

    /**
     * @property \jamesiarmes\PEWS\API\TypeTest\RulePredicatesType $conditions
     */
    protected $conditions = null;

    /**
     * @property \jamesiarmes\PEWS\API\TypeTest\RulePredicatesType $exceptions
     */
    protected $exceptions = null;

    /**
     * @property \jamesiarmes\PEWS\API\TypeTest\RuleActionsType $actions
     */
    protected $actions = null;


}

