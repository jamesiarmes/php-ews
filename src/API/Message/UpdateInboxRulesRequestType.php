<?php

namespace jamesiarmes\PEWS\API\Message;

/**
 * Class representing UpdateInboxRulesRequestType
 *
 *
 * XSD Type: UpdateInboxRulesRequestType
 *
 * @method UpdateInboxRulesRequestType getMailboxSmtpAddress()
 * @method UpdateInboxRulesRequestType setMailboxSmtpAddress(string $mailboxSmtpAddress)
 * @method UpdateInboxRulesRequestType getRemoveOutlookRuleBlob()
 * @method UpdateInboxRulesRequestType setRemoveOutlookRuleBlob(boolean $removeOutlookRuleBlob)
 * @method UpdateInboxRulesRequestType getOperations()
 * @method UpdateInboxRulesRequestType setOperations(\jamesiarmes\PEWS\API\Type\ArrayOfRuleOperationsType $operations)
 */
class UpdateInboxRulesRequestType extends BaseRequestType
{

    /**
     * @property string $mailboxSmtpAddress
     */
    protected $mailboxSmtpAddress = null;

    /**
     * @property boolean $removeOutlookRuleBlob
     */
    protected $removeOutlookRuleBlob = null;

    /**
     * @property \jamesiarmes\PEWS\API\Type\ArrayOfRuleOperationsType $operations
     */
    protected $operations = null;


}

