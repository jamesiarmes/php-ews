<?php

namespace jamesiarmes\PEWS\API\Message;

/**
 * Class representing UpdateInboxRulesResponseType
 *
 *
 * XSD Type: UpdateInboxRulesResponseType
 *
 * @method UpdateInboxRulesResponseType addRuleOperationErrors(\jamesiarmes\PEWS\API\Type\RuleOperationErrorType $ruleOperationErrors)
 * @method \jamesiarmes\PEWS\API\Type\RuleOperationErrorType[] getRuleOperationErrors()
 * @method UpdateInboxRulesResponseType setRuleOperationErrors(array $ruleOperationErrors)
 */
class UpdateInboxRulesResponseType extends ResponseMessageType
{

    /**
     * @var \jamesiarmes\PEWS\API\Type\RuleOperationErrorType[]
     */
    protected $ruleOperationErrors = null;
}
