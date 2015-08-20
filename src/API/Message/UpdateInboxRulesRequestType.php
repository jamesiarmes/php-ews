<?php

namespace jamesiarmes\PEWS\API\Message;

/**
 * Class representing UpdateInboxRulesRequestType
 *
 *
 * XSD Type: UpdateInboxRulesRequestType
 *
 * @method string getMailboxSmtpAddress()
 * @method UpdateInboxRulesRequestType setMailboxSmtpAddress(string $mailboxSmtpAddress)
 * @method boolean getRemoveOutlookRuleBlob()
 * @method UpdateInboxRulesRequestType setRemoveOutlookRuleBlob(boolean $removeOutlookRuleBlob)
 * @method \jamesiarmes\PEWS\API\Type\ArrayOfRuleOperationsType getOperations()
 * @method UpdateInboxRulesRequestType setOperations(\jamesiarmes\PEWS\API\Type\ArrayOfRuleOperationsType $operations)
 */
class UpdateInboxRulesRequestType extends BaseRequestType
{

    /**
     * @var string
     */
    protected $mailboxSmtpAddress = null;

    /**
     * @var boolean
     */
    protected $removeOutlookRuleBlob = null;

    /**
     * @var \jamesiarmes\PEWS\API\Type\ArrayOfRuleOperationsType
     */
    protected $operations = null;
}
