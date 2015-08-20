<?php

namespace jamesiarmes\PEWS\API\Type;

/**
 * Class representing SetRuleOperationType
 *
 *
 * XSD Type: SetRuleOperationType
 *
 * @method RuleType getRule()
 * @method SetRuleOperationType setRule(RuleType $rule)
 */
class SetRuleOperationType extends RuleOperationType
{

    /**
     * @var \jamesiarmes\PEWS\API\Type\RuleType
     */
    protected $rule = null;
}
