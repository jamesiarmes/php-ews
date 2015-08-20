<?php

namespace jamesiarmes\PEWS\API\Type;

use jamesiarmes\PEWS\API\Type;

/**
 * Class representing RuleType
 *
 * Rule type
 * XSD Type: RuleType
 *
 * @method RuleType getRuleId()
 * @method RuleType setRuleId(string $ruleId)
 * @method RuleType getDisplayName()
 * @method RuleType setDisplayName(string $displayName)
 * @method RuleType getPriority()
 * @method RuleType setPriority(integer $priority)
 * @method RuleType getIsEnabled()
 * @method RuleType setIsEnabled(boolean $isEnabled)
 * @method RuleType getIsNotSupported()
 * @method RuleType setIsNotSupported(boolean $isNotSupported)
 * @method RuleType getIsInError()
 * @method RuleType setIsInError(boolean $isInError)
 * @method RuleType getConditions()
 * @method RuleType setConditions(RulePredicatesType $conditions)
 * @method RuleType getExceptions()
 * @method RuleType setExceptions(RulePredicatesType $exceptions)
 * @method RuleType getActions()
 * @method RuleType setActions(RuleActionsType $actions)
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
     * @property \jamesiarmes\PEWS\API\Type\RulePredicatesType $conditions
     */
    protected $conditions = null;

    /**
     * @property \jamesiarmes\PEWS\API\Type\RulePredicatesType $exceptions
     */
    protected $exceptions = null;

    /**
     * @property \jamesiarmes\PEWS\API\Type\RuleActionsType $actions
     */
    protected $actions = null;
}
