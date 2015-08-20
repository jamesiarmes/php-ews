<?php

namespace jamesiarmes\PEWS\API\Message;

/**
 * Class representing GetInboxRulesResponseType
 *
 *
 * XSD Type: GetInboxRulesResponseType
 *
 * @method GetInboxRulesResponseType getOutlookRuleBlobExists()
 * @method GetInboxRulesResponseType setOutlookRuleBlobExists(boolean $outlookRuleBlobExists)
 * @method GetInboxRulesResponseType getInboxRules()
 * @method GetInboxRulesResponseType setInboxRules(array $inboxRules)
 */
class GetInboxRulesResponseType extends ResponseMessageType
{

    /**
     * @property boolean $outlookRuleBlobExists
     */
    protected $outlookRuleBlobExists = null;

    /**
     * @property \jamesiarmes\PEWS\API\Type\RuleType[] $inboxRules
     */
    protected $inboxRules = null;
}
