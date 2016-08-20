<?php
/**
 * Contains \jamesiarmes\PhpEws\Request\UpdateInboxRulesRequestType.
 */

namespace jamesiarmes\PhpEws\Request;

/**
 * Defines a request to update the Inbox rules in a mailbox in the server store.
 *
 * @package php-ews\Request
 */
class UpdateInboxRulesRequestType extends BaseRequestType
{
    /**
     * Represents the SMTP address of the user whose Inbox rules are to be
     * created, modified, or deleted.
     *
     * @since Exchange 2010 SP1
     *
     * @var string
     */
    public $MailboxSmtpAddress;

    /**
     * Contains an array of rule operations that can be performed on an Inbox.
     *
     * @since Exchange 2010 SP1
     *
     * @var \jamesiarmes\PhpEws\ArrayType\ArrayOfRuleOperationsType
     */
    public $Operations;

    /**
     * Indicates whether to remove the Microsoft Outlook rule blob.
     *
     * @since Exchange 2010 SP1
     *
     * @var boolean
     */
    public $RemoveOutlookRuleBlob;
}
