<?php

namespace jamesiarmes\PEWS\API\Message;

/**
 * Class representing GetInboxRulesResponseType
 *
 *
 * XSD Type: GetInboxRulesResponseType
 *
 * @method boolean isOutlookRuleBlobExists()
 * @method boolean getOutlookRuleBlobExists()
 * @method GetInboxRulesResponseType setOutlookRuleBlobExists(boolean $outlookRuleBlobExists)
 * @method GetInboxRulesResponseType addInboxRules(\jamesiarmes\PEWS\API\Type\RuleType $inboxRules)
 * @method \jamesiarmes\PEWS\API\Type\RuleType[] getInboxRules()
 * @method GetInboxRulesResponseType setInboxRules(array $inboxRules)
 */
class GetInboxRulesResponseType extends ResponseMessageType
{

    /**
     * @var boolean
     */
    protected $outlookRuleBlobExists = null;

    /**
     * @var \jamesiarmes\PEWS\API\Type\RuleType[]
     */
    protected $inboxRules = null;
}
