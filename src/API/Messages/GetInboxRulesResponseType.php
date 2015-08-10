<?php

namespace jamesiarmes\PEWS\API\Messages;

/**
 * Class representing GetInboxRulesResponseType
 *
 *
 * XSD Type: GetInboxRulesResponseType
 *
 * @method GetInboxRulesResponseType getOutlookRuleBlobExists()
 * @method GetInboxRulesResponseType
 * setOutlookRuleBlobExists($outlookRuleBlobExists)
 * @method GetInboxRulesResponseType getInboxRules()
 * @method GetInboxRulesResponseType setInboxRules($inboxRules)
 */
class GetInboxRulesResponseType extends ResponseMessageType
{

    /**
     * @property boolean $outlookRuleBlobExists
     */
    protected $outlookRuleBlobExists = null;

    /**
     * @property array $inboxRules
     */
    protected $inboxRules = null;


}

