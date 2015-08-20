<?php

namespace jamesiarmes\PEWS\API\Message;

/**
 * Class representing GetInboxRulesResponseType
 *
 *
 * XSD Type: GetInboxRulesResponseType
 *
 * @method boolean getOutlookRuleBlobExists()
 * @method GetInboxRulesResponseType setOutlookRuleBlobExists(boolean $outlookRuleBlobExists)
 * @method array getInboxRules()
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
