<?php

namespace jamesiarmes\PEWS\API\Messages;

/**
 * Class representing UpdateInboxRulesRequestType
 *
 *
 * XSD Type: UpdateInboxRulesRequestType
 *
 * @method UpdateInboxRulesRequestType getMailboxSmtpAddress()
 * @method UpdateInboxRulesRequestType setMailboxSmtpAddress($mailboxSmtpAddress)
 * @method UpdateInboxRulesRequestType getRemoveOutlookRuleBlob()
 * @method UpdateInboxRulesRequestType
 * setRemoveOutlookRuleBlob($removeOutlookRuleBlob)
 * @method UpdateInboxRulesRequestType getOperations()
 * @method UpdateInboxRulesRequestType setOperations($operations)
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
     * @property \jamesiarmes\PEWS\API\TypeTest\ArrayOfRuleOperationsType $operations
     */
    protected $operations = null;


}

