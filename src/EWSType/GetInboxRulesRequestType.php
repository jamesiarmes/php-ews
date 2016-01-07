<?php
/**
 * Contains EWSType_GetInboxRulesRequestType.
 */

/**
 * Defines a request to get the Inbox rules on a mailbox in the server store.
 *
 * @package php-ews\Types
 *
 * @todo Extend EWSType_BaseRequestType.
 */
class EWSType_GetInboxRulesRequestType extends EWSType
{
    /**
     * Represents the SMTP address of the user whose Inbox rules are to be
     * retrieved.
     *
     * @since Exchange 2010
     *
     * @var string
     */
    public $MailboxSmtpAddress;
}
