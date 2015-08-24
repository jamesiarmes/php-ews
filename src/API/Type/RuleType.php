<?php

namespace jamesiarmes\PEWS\API\Type;

use jamesiarmes\PEWS\API\Type;

/**
 * Class representing RuleType
 *
 * Rule type
 * XSD Type: RuleType
 *
 * @method string getRuleId()
 * @method RuleType setRuleId(string $ruleId)
 * @method string getDisplayName()
 * @method RuleType setDisplayName(string $displayName)
 * @method integer getPriority()
 * @method RuleType setPriority(integer $priority)
 * @method boolean isEnabled()
 * @method boolean getIsEnabled()
 * @method RuleType setIsEnabled(boolean $isEnabled)
 * @method boolean isNotSupported()
 * @method boolean getIsNotSupported()
 * @method RuleType setIsNotSupported(boolean $isNotSupported)
 * @method boolean isInError()
 * @method boolean getIsInError()
 * @method RuleType setIsInError(boolean $isInError)
 * @method RulePredicatesType getConditions()
 * @method RuleType setConditions(RulePredicatesType $conditions)
 * @method RulePredicatesType getExceptions()
 * @method RuleType setExceptions(RulePredicatesType $exceptions)
 * @method RuleActionsType getActions()
 * @method RuleType setActions(RuleActionsType $actions)
 */
class RuleType extends Type
{

    /**
     * @var string
     */
    protected $ruleId = null;

    /**
     * @var string
     */
    protected $displayName = null;

    /**
     * @var integer
     */
    protected $priority = null;

    /**
     * @var boolean
     */
    protected $isEnabled = null;

    /**
     * @var boolean
     */
    protected $isNotSupported = null;

    /**
     * @var boolean
     */
    protected $isInError = null;

    /**
     * @var \jamesiarmes\PEWS\API\Type\RulePredicatesType
     */
    protected $conditions = null;

    /**
     * @var \jamesiarmes\PEWS\API\Type\RulePredicatesType
     */
    protected $exceptions = null;

    /**
     * @var \jamesiarmes\PEWS\API\Type\RuleActionsType
     */
    protected $actions = null;
}
